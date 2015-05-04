<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->slide = true;
		$this->suscription = true;

		$testimonials = Testimonials::model()->findAllByAttributes(array('status'=>1), array('order'=>'t.id_testimony DESC'));
		$articles = BlogEntries::model()->findAllByAttributes(array('status'=>1), array('order'=>'t.id_entry DESC'));
		$question = Questions::model()->findByAttributes(array('status'=>1), array('order'=>'rand()'));

		$this->render('index', array(
			'testimonials'=>$testimonials,
			'articles'=>$articles,
			'question'=>$question
		));
	}

	public function actionNosotros(){
		$this->suscription = true;
		
		$team = Team::model()->findAllByAttributes(array('status'=>1));
		$this->render('about', array(
			'page'=>Pages::model()->findByPk(1),
			'team'=>$team
		));
	}

	public function actionBeneficios(){
		$this->suscription = true;
		
		$treatments = Treatments::model()->findAllByAttributes(array('status'=>1));
		$this->render('benefits', array(
			'treatments'=>$treatments
		));
	}

	public function actionProductos(){
		$this->render('products', array(

		));
	}

	public function actionPuntos_venta(){
		$stores = Stores::model()->findAllByAttributes(array('status'=>1));
		$this->render('sales', array(
			'stores'=>$stores
		));
	}

	public function actionBlog(){
		$this->suscription = true;
		
		$articles = BlogEntries::model()->findAllByAttributes(array('status'=>1), array('order'=>'t.id_entry DESC'));
		$this->render('blog', array(
			'articles'=>$articles
		));
	}

	public function actionPreguntas_frecuentes(){
		$this->showEmailContact = true;
		
		$questions = Questions::model()->findAllByAttributes(array('status'=>1), array('order'=>'t.id_question DESC'));
		$this->render('question', array(
			'questions'=>$questions
		));
	}

	public function actionContacto(){
		if(Yii::app()->request->isAjaxRequest){
			$arrayReturn = array(
				'status'=>'error',
				'message'=>'No se pudo enviar el mensaje. Intente mas tarde.'
			);
			$emailContact = Variables::model()->findByPk(4);
			$emailContent = '<p>Un usuario envio un mensaje desde el formulario de contacto de la pagina web de Natural Drops.</p><br>'.
			'<p><strong>Nombre: </strong>'.$_POST['name'].'</p>'.
			'<p><strong>Correo electrónico: </strong>'.$_POST['email'].'</p>'.
			'<p><strong>Asunto: </strong>'.$_POST['subject'].'</p><br>';

			if(MyMethods::sentMail('Mensaje contacto web Natural Drops', $_POST['email'], $emailContact->value, $emailContent, array('fromName'=>$_POST['name']))){
				$arrayReturn = array(
					'status'=>'success',
					'message'=>'Su mensaje fue enviado con exito. Muy pronto nos comunicaremos contigo.'
				);
			}

			echo CJSON::encode($arrayReturn);
		}
		else{
			$this->suscription = true;
			
			$phone = Variables::model()->findByPk(5);
			$email = Variables::model()->findByPk(4);
			$address = Variables::model()->findByPk(6);

			$this->render('contact', array(
				'phone'=>$phone,
				'email'=>$email,
				'address'=>$address,
			));
		}
	}

	public function actionAdd_sale(){
		if(Yii::app()->request->isAjaxRequest){
			$arrayReturn = array(
				'status'=>'error',
				'message'=>'No se pudo hacer la solicitud. Intente mas tarde.'
			);
			$emailContact = Variables::model()->findByPk(4);
			$emailContent = '<p>Un cliente solicito un pedido desde la página web de Natural Drops. Se recomienda contactar ahora mismo.</p><br>'.
			'<p><strong>Nombre: </strong>'.$_POST['name'].'</p>'.
			'<p><strong>Correo electrónico: </strong>'.$_POST['email'].'</p>'.
			'<p><strong>Teléfono: </strong>'.$_POST['phone'].'</p>'.
			'<p><strong>Producto: </strong>'.$_POST['product'].'</p>'.
			'<p><strong>Cantidad: </strong>'.$_POST['quantity'].'</p><br>';

			if(MyMethods::sentMail('Compra productos web Natural Drops', $_POST['email'], $emailContact->value, $emailContent, array('fromName'=>$_POST['name']))){
				$arrayReturn = array(
					'status'=>'success',
					'message'=>'Gracias por comprar nuestros productos. En breve nos comunicaremos contigo.'
				);
			}
			else{
				$arrayReturn = array(
					'status'=>'error',
					'message'=>'Ocurrio un error al enviar la solicitud. Intentelo mas tarde.'
				);
			}

			echo CJSON::encode($arrayReturn);
		}
		else
			throw new CHttpException(404,'The requested page does not exist.');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			$this->layout = '//layouts/error';

			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	/*public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}*/

	/**
	 * Displays the login page
	 */
	/*public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	/*public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}*/
}