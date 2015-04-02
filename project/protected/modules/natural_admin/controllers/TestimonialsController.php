<?php

class TestimonialsController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout='/layouts/main';

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array(
                    'admin',
                    'create',
                    'update',
                    'status',
                    'delete_testimony'
                ),
                'users'=>array('@'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $scriptsAdd = array(
            array(
                'type'=>'css',
                'file'=>'assets/admin/libs/jquery-datatables/css/dataTables.bootstrap'
            ),
            array(
                'type'=>'css',
                'file'=>'assets/admin/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/jquery-datatables/js/jquery.dataTables.min'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/jquery-datatables/js/dataTables.bootstrap'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min'
            )
        );
        $this->addScripts($scriptsAdd);
        $this->writeScripts();

        $testimonials = Testimonials::model()->findAll(array(
            'condition'=>'t.status != 2',
            'order'=>'t.id_testimony DESC'
        ));

        $this->render('admin',array(
            'testimonials'=>$testimonials,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $scriptsAdd = array(
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/ckeditor/ckeditor'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/ckeditor/adapters/jquery'
            )
        );
        $this->addScripts($scriptsAdd, 'admin');
        $this->writeScripts();

        $model=new Testimonials;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Testimonials']))
        {
            $errors = false;

            $model->attributes=$_POST['Testimonials'];
            $model->image = 'default';
            $model->clearErrors();

            if($model->validate(null, false)){
                if(($_FILES['image']['size'] > 0)){
                    $server = $_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl.'/images/';
                    
                    $uploadLogo = MyMethods::uploadImage($_FILES['image'], 256, 'testimonials/');

                    if(!$uploadLogo['status']){
                        $model->addError('image', $uploadLogo['message']);
                        $errors = true;
                    }
                    else{
                        $model->image = $uploadLogo['imageName'];
                    }
                }
                else{
                    $model->addError('image', 'Debe agregar una imagen para el testimonio.');
                    $errors = true;
                }

                if(!$errors && $model->save()){
                    $this->redirect(array('admin'));
                }
            }
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $scriptsAdd = array(
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/ckeditor/ckeditor'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/ckeditor/adapters/jquery'
            )
        );
        $this->addScripts($scriptsAdd, 'admin');
        $this->writeScripts();

        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Testimonials']))
        {
            $errors = false;

            $model->attributes=$_POST['Testimonials'];
            $model->clearErrors();

            if($model->validate(null, false)){
                if(($_FILES['image']['size'] > 0)){
                    $server = $_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl.'/images/';
                    $currentImage = $model->image;
                    
                    $uploadLogo = MyMethods::uploadImage($_FILES['image'], 256, 'testimonials/');

                    if(!$uploadLogo['status']){
                        $model->addError('image', $uploadLogo['message']);
                        $errors = true;
                    }
                    else{
                        $model->image = $uploadLogo['imageName'];
                        if($currentImage != ""){
                            @unlink($_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl."/images/testimonials/".$currentImage);
                        }
                    }
                }

                if(!$errors && $model->save()){
                    $this->redirect(array('admin'));
                }
            }
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    public function actionStatus($id){
        $testimony = $this->loadModel($id);
        if($testimony->status == 1)
            $testimony->status = 0;
        else if($testimony->status == 0)
            $testimony->status = 1;
        else
            throw new CHttpException(404,'The requested page does not exist.');

        $testimony->save();
        $this->redirect(array('admin'));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete_testimony($id)
    {
        $testimony = $this->loadModel($id);

        $testimony->status = 2;
        if($testimony->save()){
            @unlink($_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl."/images/testimonials/".$testimony->image);
        }

        $this->redirect(array('admin'));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Testimonials the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Testimonials::model()->findByAttributes(array('id_testimony'=>$id), array('condition'=>'t.status != 2'));
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Testimonials $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='testimonials-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}