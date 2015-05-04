<?php

class SuscripcionController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';

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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('register', 'verify'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Registra una suscricion
	 */
	public function actionRegister(){
		if(Yii::app()->request->isAjaxRequest){
			$validator = new CEmailValidator;
			$email = $_POST['email'];
			
			$arrayReturn = array(
				'status'=>'error',
				'message'=>'No se pudo hacer la solicitud. Intente mas tarde.'
			);
			$emailContact = Variables::model()->findByPk(4);
			$status = false;

			if($validator->validateValue($email)){
				$existing = Suscriptions::model()->findAllByAttributes(array('authorized'=>1, 'email'=>$email));
				if(count($existing) > 0){
					$arrayReturn = array(
						'status'=>'success',
						'message'=>'El correo electrónico ya se encuentra registrado.'
					);
				}
				else{
					$existing = Suscriptions::model()->findByAttributes(array('authorized'=>0, 'email'=>$email));
					$model = new Suscriptions;
					if($existing != null){
						$model = $existing;
						$model->date = new CDbExpression('now()');
						$model->verification_code = MyMethods::generarCadenaSeguridad();
						$model->save();
						$arrayReturn = array(
							'status'=>'success',
							'message'=>'El correo electrónico ya se encuentra registrado pero aun no se ha confirmado la suscripción. Un nuevo email fue enviado a tu dirección de correo electrónico para que confirmes la suscripción.'
						);
						$status = true;
					}
					else{
						$model->email = $email;
						$model->date = new CDbExpression('now()');
						$model->verification_code = MyMethods::generarCadenaSeguridad();
						$model->save();
						$arrayReturn = array(
							'status'=>'success',
							'message'=>'El registro se realizo con exito. Un email fue enviado a tu dirección de correo electrónico para que confirmes la suscripción.',
						);
						$status = true;
					}
				}
			}
			else{
				$arrayReturn = array(
					'status'=>'error',
					'message'=>'El correo electrónico no es valido. Verifique he intente de nuevo.'
				);
			}

			if($status){
				$emailContent = '<strong style="font-size:16px;">Hola,</strong><br><br>'.
					'<p style="color:#444444;">Estamos listos para activar tu suscripción. Todo lo que necesitamos hacer es asegurarnos de que és tu dirección de correo electrónico.</p><br>'.
					'<p style="color:#444444;"><a href="'.Yii::app()->getRequest()->getHostInfo().Yii::app()->createUrl('suscripcion/verify')."?susc=".$model->id_suscription."&verificationCode=".$model->verification_code.'" target="_blank" style="border:1px solid #487228;border-radius:3px;background:rgb(159, 194, 58);color:#fff;display:block;font-weight:700;font-size:16px;line-height:1.25em;margin:5px auto;padding:10px 18px;text-decoration:none;width:180px;text-align:center">Verificar Correo</a></p><br>'.
					'<p style="color:#888888;">Si no realizo la suscripción, simplemente ignore este mensaje y todo volverá a ser como antes.</p><br>';

				MyMethods::sentMail(
					'Confirmar Suscripción Natural Drops',
					$emailContact->value,
					$email,
					$emailContent,
					array('fromName'=>'Natural Drops'));
			}

			echo CJSON::encode($arrayReturn);
		}
		else
			throw new CHttpException(404,'The requested page does not exist.');
	}

	public function actionVerify(){
		if(isset($_GET['susc']) && isset($_GET['verificationCode'])){
			$suscription = Suscriptions::model()->findByAttributes(array('id_suscription'=>$_GET['susc'], 'verification_code'=>$_GET['verificationCode']));
			$emailContact = Variables::model()->findByPk(4);
			if($suscription == null)
				throw new CHttpException(404,'The requested page does not exist.');
			else{
				$suscription->authorized = 1;
				$suscription->verification_code = "";
				$suscription->save();

				$loadMessage = array(
					'status'=>'success',
					'message'=>'Su suscripción se completo con exito. Ahora recibirás noticias e información de Natural Drops de su interés y de primera mano. Gracias por tu suscripción.'
				);
				Yii::app()->user->setFlash('message', CJSON::encode($loadMessage));

				$this->redirect(Yii::app()->homeUrl);
			}
		}
		else
			throw new CHttpException(404,'The requested page does not exist.');
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Events the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Suscriptions::model()->findByAttributes(array('status'=>1, 'id_suscription'=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Events $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='events-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
