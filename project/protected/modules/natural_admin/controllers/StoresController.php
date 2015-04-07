<?php

class StoresController extends Controller
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
                    'countries',
                    'countries_create',
                    'countries_update',
                    'countries_status',
                    'countries_delete',

                    'cities',
                    'cities_create',
                    'cities_update',
                    'cities_status',
                    'cities_delete',

                    'admin',
                    'create',
                    'view',
                    'update',
                    'status',
                    'stores_delete'
                ),
                'users'=>array('@'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    

    /////////////////////////////////////////////////////////////////////////////////////////////////
    public function actionCountries()
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

        $countries = Countries::model()->findAll(array('condition'=>'t.status != 2', 'order'=>'t.name ASC'));

        $this->render('countries_admin',array(
            'countries'=>$countries,
        ));
    }
    public function actionCountries_create()
    {
        $this->writeScripts();

        $model=new Countries;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Countries']))
        {
            $model->attributes=$_POST['Countries'];
            if($model->save())
                $this->redirect(array('countries'));
        }

        $this->render('countries_create',array(
            'model'=>$model,
        ));
    }
    public function actionCountries_update($id)
    {
        $this->writeScripts();

        $model = $this->loadCountryModel($id);

        if(isset($_POST['Countries']))
        {
            $model->attributes=$_POST['Countries'];
            if($model->save())
                $this->redirect(array('countries'));
        }

        $this->render('countries_update',array(
            'model'=>$model,
        ));
    }
    public function actionCountries_status($id){
        $country = $this->loadCountryModel($id);
        if($country->status == 1)
            $country->status = 0;
        else if($country->status == 0)
            $country->status = 1;
        else
            throw new CHttpException(404,'The requested page does not exist.');

        $country->save();
        $this->redirect(array('countries'));
    }
    public function actionCountries_delete($id)
    {
        $country = $this->loadCountryModel($id);

        $country->status = 2;
        if($country->save()){
            foreach ($country->cities as $key => $city) {
                $city->status = 2;
                if($city->save()){
                    foreach ($city->stores as $key => $store) {
                        $store->status = 2;
                        $store->save();
                    }
                }
            }
        }

        $this->redirect(array('countries'));
    }
    /////////////////////////////////////////////////////////////////////////////////////////////




    /////////////////////////////////////////////////////////////////////////////////////////////////
    public function actionCities()
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

        $cities = Cities::model()->findAll(array('condition'=>'t.status != 2', 'order'=>'t.name ASC'));

        $this->render('cities_admin',array(
            'cities'=>$cities,
        ));
    }
    public function actionCities_create()
    {
        $this->writeScripts();

        $model=new Cities;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Cities']))
        {
            $model->attributes=$_POST['Cities'];
            if($model->save())
                $this->redirect(array('cities'));
        }

        $this->render('cities_create',array(
            'model'=>$model,
        ));
    }
    public function actionCities_update($id)
    {
        $this->writeScripts();

        $model = $this->loadCityModel($id);

        if(isset($_POST['Cities']))
        {
            $model->attributes=$_POST['Cities'];
            if($model->save())
                $this->redirect(array('cities'));
        }

        $this->render('cities_update',array(
            'model'=>$model,
        ));
    }
    public function actionCities_status($id){
        $city = $this->loadCityModel($id);
        if($city->status == 1)
            $city->status = 0;
        else if($city->status == 0)
            $city->status = 1;
        else
            throw new CHttpException(404,'The requested page does not exist.');

        $city->save();
        $this->redirect(array('cities'));
    }
    public function actionCities_delete($id)
    {
        $city = $this->loadCityModel($id);

        $city->status = 2;
        $city->status = 2;
        if($city->save()){
            foreach ($city->stores as $key => $store) {
                $store->status = 2;
                $store->save();
            }
        }

        $this->redirect(array('cities'));
    }
    /////////////////////////////////////////////////////////////////////////////////////////////




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

        $stores = Stores::model()->findAll(array('condition'=>'t.status != 2'));

        $this->render('admin',array(
            'stores'=>$stores,
        ));
    }

    public function actionCreate()
    {
        $cs = Yii::app()->getClientScript();
        $cs->registerScriptFile('http://maps.google.com/maps/api/js?sensor=true');

        $scriptsAdd = array(
            array(
                'type'=>'js',
                'file'=>'js/admin/libs/gmaps'
            ),
            array(
                'type'=>'js',
                'file'=>'js/admin/map'
            )
        );
        $this->addScripts($scriptsAdd);
        $this->writeScripts();

        $model=new Stores;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Stores']))
        {
            $errors = false;

            $model->attributes=$_POST['Stores'];
            $model->clearErrors();

            if($model->validate(null, false)){
                if(!$errors && $model->save()){
                    $this->redirect(array('view', 'id'=>$model->id_store));
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
        $cs = Yii::app()->getClientScript();
        $cs->registerScriptFile('http://maps.google.com/maps/api/js?sensor=true');

        $scriptsAdd = array(
            array(
                'type'=>'js',
                'file'=>'js/admin/libs/gmaps'
            ),
            array(
                'type'=>'js',
                'file'=>'js/admin/map'
            )
        );
        $this->addScripts($scriptsAdd);
        $this->writeScripts();

        $this->render('view',array(
            'store'=>$this->loadModel($id),
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $cs = Yii::app()->getClientScript();
        $cs->registerScriptFile('http://maps.google.com/maps/api/js?sensor=true');

        $scriptsAdd = array(
            array(
                'type'=>'js',
                'file'=>'js/admin/libs/gmaps'
            ),
            array(
                'type'=>'js',
                'file'=>'js/admin/map'
            )
        );
        $this->addScripts($scriptsAdd);
        $this->writeScripts();

        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Stores']))
        {
            $errors = false;

            $model->attributes=$_POST['Stores'];
            $model->clearErrors();

            if($model->validate(null, false)){
                if(!$errors && $model->save()){
                    $this->redirect(array('view', 'id'=>$model->id_store));
                }
            }
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    public function actionStatus($id){
        $store = $this->loadModel($id);
        if($store->status == 1)
            $store->status = 0;
        else if($store->status == 0)
            $store->status = 1;
        else
            throw new CHttpException(404,'The requested page does not exist.');

        $store->save();
        $this->redirect(array('admin'));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionStores_delete($id)
    {
        $store = $this->loadModel($id);

        $store->status = 2;
        $store->save();

        $this->redirect(array('admin'));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Stores the loaded model
     * @throws CHttpException
     */
    public function loadCountryModel($id)
    {
        $model = Countries::model()->findByAttributes(array('id_country'=>$id), array('condition'=>'t.status != 2'));
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
    public function loadCityModel($id)
    {
        $model = Cities::model()->findByAttributes(array('id_city'=>$id), array('condition'=>'t.status != 2'));
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
    public function loadModel($id)
    {
        $model=Stores::model()->findByAttributes(array('id_store'=>$id), array('condition'=>'t.status != 2'));
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Stores $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='stores-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}