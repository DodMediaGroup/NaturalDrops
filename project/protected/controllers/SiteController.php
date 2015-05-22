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

		//unset(Yii::app()->request->cookies['language']);

		$testimonials = Testimonials::model()->findAllByAttributes(array('status'=>1, 'language'=>Yii::app()->request->cookies['language']), array('order'=>'t.id_testimony DESC'));
		if(count($testimonials) == 0)
			$testimonials = Testimonials::model()->findAllByAttributes(array('status'=>1), array('order'=>'t.id_testimony DESC'));
		
		$articles = BlogEntries::model()->findAllByAttributes(array('status'=>1, 'language'=>Yii::app()->request->cookies['language']), array('order'=>'t.id_entry DESC'));
		if(count($articles) == 0)
			$articles = BlogEntries::model()->findAllByAttributes(array('status'=>1), array('order'=>'t.id_entry DESC'));

		$question = Questions::model()->findByAttributes(array('status'=>1, 'language'=>Yii::app()->request->cookies['language']), array('order'=>'rand()'));
		if($question == null)
			$question = Questions::model()->findByAttributes(array('status'=>1), array('order'=>'rand()'));

		$this->render('index', array(
			'testimonials'=>$testimonials,
			'articles'=>$articles,
			'question'=>$question
		));
	}

	public function actionPage($id){
		$page = PagesSite::model()->findByAttributes(array('navigation'=>$id, 'status'=>1));
		if($page != null){
			$controllerPage = 'page_'.(($page->principal == '')?$page->navigation:$page->principal0->navigation);
			if($id != 'blog')
				Yii::app()->request->cookies['language'] = new CHttpCookie('language', $page->language);

			$this->$controllerPage();
		}
		else
			throw new CHttpException(404,'The requested page does not exist.');
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

	public function actionChange_language(){
		if(isset($_GET['language'])){
			$language = Languages::model()->findByAttributes(array('id_language'=>$_GET['language'], 'status'=>1));

			if($language != null){
				$cookie = new CHttpCookie('language', $_GET['language']);
				$cookie->expire = time() + (60*60*2);

				Yii::app()->request->cookies['language'] = $cookie;

				$this->redirect(Yii::app()->homeUrl);
			}
			else
				throw new CHttpException(404,'The requested page does not exist.');
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

	function page_nosotros(){
		$this->suscription = true;
		
		$team = Team::model()->findAllByAttributes(array('status'=>1));
		$page = Pages::model()->findByAttributes(array('principal'=>1, 'language'=>Yii::app()->request->cookies['language']));
		if($page == null)
			$page = Pages::model()->findByPk(1);
		$this->render('about', array(
			'page'=>$page,
			'team'=>$team
		));
	}

	function page_beneficios(){
		$this->suscription = true;
		
		$treatments = Treatments::model()->findAllByAttributes(array('status'=>1, 'language'=>Yii::app()->request->cookies['language']));
		if(count($treatments) == 0)
			$treatments = Treatments::model()->findAllByAttributes(array('status'=>1, 'language'=>1));
		$page = PagesSite::model()->findByAttributes(array('principal'=>4, 'language'=>Yii::app()->request->cookies['language']));
		if($page == null)
			$page = PagesSite::model()->findByPk(4);

		$this->render('benefits', array(
			'page'=>$page,
			'treatments'=>$treatments
		));
	}

	function page_productos(){
		$page = PagesSite::model()->findByAttributes(array('principal'=>6, 'language'=>Yii::app()->request->cookies['language']));
		if($page == null)
			$page = PagesSite::model()->findByPk(6);
		$this->render('products', array(
			'page'=>$page,
		));
	}

	function page_puntos_venta(){
		$stores = Stores::model()->findAllByAttributes(array('status'=>1));
		$page = PagesSite::model()->findByAttributes(array('principal'=>8, 'language'=>Yii::app()->request->cookies['language']));
		if($page == null)
			$page = PagesSite::model()->findByPk(8);
		$this->render('sales', array(
			'page'=>$page,
			'stores'=>$stores
		));
	}

	function page_blog(){
		$this->suscription = true;
		
		$articles = BlogEntries::model()->findAllByAttributes(array('status'=>1, 'language'=>Yii::app()->request->cookies['language']), array('order'=>'t.id_entry DESC'));
		if(count($articles) == 0)
			$articles = BlogEntries::model()->findAllByAttributes(array('status'=>1), array('order'=>'t.id_entry DESC'));
		$page = PagesSite::model()->findByAttributes(array('principal'=>10, 'language'=>Yii::app()->request->cookies['language']));
		if($page == null)
			$page = PagesSite::model()->findByPk(10);
		$this->render('blog', array(
			'page'=>$page,
			'articles'=>$articles
		));
	}

	function page_preguntas_frecuentes(){
		$this->showEmailContact = true;
		
		$questions = Questions::model()->findAllByAttributes(array('status'=>1, 'language'=>Yii::app()->request->cookies['language']), array('order'=>'t.id_question DESC'));
		if(count($questions) == 0)
			$questions = Questions::model()->findAllByAttributes(array('status'=>1), array('order'=>'t.id_question DESC'));
		$page = PagesSite::model()->findByAttributes(array('principal'=>12, 'language'=>Yii::app()->request->cookies['language']));
		if($page == null)
			$page = PagesSite::model()->findByPk(12);
		$this->render('question', array(
			'page'=>$page,
			'questions'=>$questions
		));
	}

	function page_contacto(){
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
					'message'=>'Tu mensaje fue enviado con exito. Muy pronto nos comunicaremos contigo.'
				);
			}

			echo CJSON::encode($arrayReturn);
		}
		else{
			$this->suscription = true;
			
			$phone = Variables::model()->findByPk(5);
			$email = Variables::model()->findByPk(4);
			$address = Variables::model()->findByPk(6);

			$page = PagesSite::model()->findByAttributes(array('principal'=>14, 'language'=>Yii::app()->request->cookies['language']));
			if($page == null)
				$page = PagesSite::model()->findByPk(14);

			$this->render('contact', array(
				'page'=>$page,
				'phone'=>$phone,
				'email'=>$email,
				'address'=>$address,
			));
		}
	}
}