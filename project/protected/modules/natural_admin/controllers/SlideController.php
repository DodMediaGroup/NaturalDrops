<?php

class SlideController extends Controller
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
                    'uploadImages',
                    'deleteImage',
                    'status',
                    'delete_slide'
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

        $slides = Slide::model()->findAllByAttributes(array('status'=>2));
        foreach ($slides as $key => $slide) {
            $slide->delete();
        }

        $slides = Slide::model()->findAll(array(
            'condition'=>'t.status != 2',
            'order'=>'t.id_slide DESC'
        ));

        $this->render('admin',array(
            'slides'=>$slides,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model=new Slide;
        $model->save();

        $this->redirect(array('update','id'=>$model->id_slide));
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
                'type'=>'css',
                'file'=>'assets/admin/libs/dropzone/css/dropzone'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/dropzone/dropzone.min'
            )
        );
        $this->addScripts($scriptsAdd, 'admin');
        $this->writeScripts();

        $model=$this->loadModel($id);

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    public function actionUploadImages($id){
        $slide = $this->loadModel($id);

        if(Yii::app()->request->isAjaxRequest && isset($_FILES['file'])){
            $server = $_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl.'/images/';
            $path = 'slide/';

            $uploadImage = MyMethods::uploadImage($_FILES['file'], 5000, $path);

            if($uploadImage['status']){
                $image = new ImagesSlide;
                $image->slide = $slide->id_slide;
                $image->path = $uploadImage['imageName'];

                MyMethods::resizeImage($server.$path, $image->path, 200, 200);

                $image->save();
                if($slide->status == 2)
                    $slide->status = 1;
                $slide->save();
            }
        }
        else
            throw new CHttpException(404,'The requested page does not exist.');
    }

    public function actionDeleteImage($id){
        $image = ImagesSlide::model()->findByPk($id);
        if($image != null){
            if(count($image->slide0->imagesSlides) > 1){
                @unlink($_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl."/images/slide/".$image->path);
                @unlink($_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl."/images/slide/200x200/".$image->path);
                $image->delete();
                $this->redirect(array('admin'));
            }
            else
                throw new CHttpException(404,'The requested page does not exist.');
        }
        else
            throw new CHttpException(404,'The requested page does not exist.');
    }

    public function actionStatus($id){
        $slide = $this->loadModel($id);
        if($slide->status == 1)
            $slide->status = 0;
        else if($slide->status == 0)
            $slide->status = 1;
        else
            throw new CHttpException(404,'The requested page does not exist.');

        $slide->save();
        $this->redirect(array('admin'));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete_slide($id)
    {
        $slide = $this->loadModel($id);

        foreach ($slide->imagesSlides as $key => $image) {
            @unlink($_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl."/images/slide/".$image->path);
            @unlink($_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl."/images/slide/200x200/".$image->path);
            $image->delete();
        }
        $slide->delete();

        $this->redirect(array('admin'));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Slide the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Slide::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Slide $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='slide-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}