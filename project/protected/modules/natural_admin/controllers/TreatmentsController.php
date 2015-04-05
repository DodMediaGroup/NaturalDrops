<?php

class TreatmentsController extends Controller
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
                    'view',
                    'update',
                    'status',
                    'delete_treatment'
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

        $treatments = Treatments::model()->findAll(array('condition'=>'t.status != 2', 'order'=>'t.id_treatment DESC'));

        $this->render('admin',array(
            'treatments'=>$treatments,
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

        $model=new Treatments;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Treatments']))
        {
            $errors = false;

            $model->attributes=$_POST['Treatments'];
            $model->image = 'default';
            $model->clearErrors();

            if($model->validate(null, false)){
                if(($_FILES['image']['size'] > 0)){
                    $server = $_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl.'/images/';
                    
                    $uploadLogo = MyMethods::uploadImage($_FILES['image'], 256, 'treatments/');

                    if(!$uploadLogo['status']){
                        $model->addError('image', $uploadLogo['message']);
                        $errors = true;
                    }
                    else{
                        $model->image = $uploadLogo['imageName'];
                    }
                }
                else{
                    $model->addError('image', 'Debe agregar una imagen representativa para el tratamiento.');
                    $errors = true;
                }

                if(!$errors && $model->save()){
                    $this->redirect(array('view','id'=>$model->id_treatment));
                }
            }
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->writeScripts();

        $this->render('view',array(
            'model'=>$this->loadModel($id),
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

        if(isset($_POST['Treatments']))
        {
            $errors = false;

            $model->attributes=$_POST['Treatments'];
            $model->clearErrors();

            if($model->validate(null, false)){
                if(($_FILES['image']['size'] > 0)){
                    $server = $_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl.'/images/';
                    $currentImage = $model->image;
                    
                    $uploadLogo = MyMethods::uploadImage($_FILES['image'], 256, 'treatments/');

                    if(!$uploadLogo['status']){
                        $model->addError('image', $uploadLogo['message']);
                        $errors = true;
                    }
                    else{
                        $model->image = $uploadLogo['imageName'];
                        if($currentImage != ""){
                            @unlink($_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl."/images/treatments/".$currentImage);
                        }
                    }
                }

                if(!$errors && $model->save()){
                    $this->redirect(array('view','id'=>$model->id_treatment));
                }
            }
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    public function actionStatus($id){
        $treatment = $this->loadModel($id);
        if($treatment->status == 1)
            $treatment->status = 0;
        else if($treatment->status == 0)
            $treatment->status = 1;
        else
            throw new CHttpException(404,'The requested page does not exist.');

        $treatment->save();
        $this->redirect(array('admin'));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete_treatment($id)
    {
        $treatment = $this->loadModel($id);

        $treatment->status = 2;
        if($treatment->save()){
            @unlink($_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl."/images/treatments/".$treatment->image);
        }

        $this->redirect(array('admin'));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Treatments the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Treatments::model()->findByAttributes(array('id_treatment'=>$id), array('condition'=>'t.status != 2'));
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Treatments $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='treatments-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}