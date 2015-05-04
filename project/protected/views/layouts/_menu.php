<?php $ruta = explode("/",Yii::app()->request->pathInfo); ?>

<div class="container principal-menu">
	<h1 class="principal-logo"><a class="super-div" href="<?php echo Yii::app()->homeUrl; ?>"></a></h1>
	<nav>
		<ul>
			<li class="item-menu"><a href="<?php echo $this->createUrl('nosotros/') ?>" class="<?php echo (strtolower($ruta[0]) == "nosotros")?"active":""; ?>">NOSOTROS</a></li>
			<li class="item-menu"><a href="<?php echo $this->createUrl('beneficios/') ?>" class="<?php echo (strtolower($ruta[0]) == "beneficios")?"active":""; ?>">BENEFICIOS</a></li>
			<li class="item-menu"><a href="<?php echo $this->createUrl('productos/') ?>" class="<?php echo (strtolower($ruta[0]) == "productos")?"active":""; ?>">PRODUCTOS</a></li>
			<li class="item-menu"><a href="<?php echo $this->createUrl('puntos_venta/') ?>" class="<?php echo (strtolower($ruta[0]) == "puntos_venta")?"active":""; ?>">PUNTOS DE VENTA</a></li>
			<li class="item-menu"><a href="<?php echo $this->createUrl('blog/') ?>" class="<?php echo (strtolower($ruta[0]) == "blog")?"active":""; ?>">BLOG</a></li>
			<li class="item-menu"><a href="<?php echo $this->createUrl('preguntas_frecuentes/') ?>" class="<?php echo (strtolower($ruta[0]) == "preguntas_frecuentes")?"active":""; ?>">PREGUNTAS FRECUENTES</a></li>
		</ul>
		<div class="social">
			<a href="<?php echo $this->createUrl('contacto/') ?>" class="show-item-social" title="CONTACTO"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/contact.svg" class="js-img-to-svg"></a>
			<?php $facebook = Variables::model()->findByPk(2); ?>
			<a href="<?php echo ($facebook->value != '')?$facebook->value:'#'; ?>" target="_blank" class="show-item-social" title="FACEBOOK"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/facebook.svg" class="js-img-to-svg"></a>
			<?php $instagram = Variables::model()->findByPk(3); ?>
			<a href="<?php echo ($instagram->value != '')?$instagram->value:'#'; ?>" target="_blank" class="show-item-social" title="INSTAGRAM"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/instagram.svg" class="js-img-to-svg"></a>
			<div class="item-menu is-item-social">
				<a href="#">CONTACTO</a>
			</div>
		</div>
		<div class="button">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</div>
	</nav>
	<div class="menu_responsive">
		<ul>
			<li class="<?php echo (strtolower($ruta[0]) == "nosotros")?"active":""; ?>"><a href="<?php echo $this->createUrl('nosotros/') ?>">NOSOTROS</a></li>
			<li class="<?php echo (strtolower($ruta[0]) == "beneficios")?"active":""; ?>"><a href="<?php echo $this->createUrl('beneficios/') ?>">BENEFICIOS</a></li>
			<li class="<?php echo (strtolower($ruta[0]) == "productos")?"active":""; ?>"><a href="<?php echo $this->createUrl('productos/') ?>">PRODUCTOS</a></li>
			<li class="<?php echo (strtolower($ruta[0]) == "puntos_venta")?"active":""; ?>"><a href="<?php echo $this->createUrl('puntos_venta/') ?>">PUNTOS DE VENTA</a></li>
			<li class="<?php echo (strtolower($ruta[0]) == "blog")?"active":""; ?>"><a href="<?php echo $this->createUrl('blog/') ?>">BLOG</a></li>
			<li class="<?php echo (strtolower($ruta[0]) == "preguntas_frecuentes")?"active":""; ?>"><a href="<?php echo $this->createUrl('preguntas_frecuentes/') ?>">PREGUNTAS FRECUENTES</a></li>
			<li>
				<div class="social">
					<a href="<?php echo $this->createUrl('contacto/') ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/contact.svg" class="js-img-to-svg" alt="Contacto"></a>
					<a href="<?php echo ($facebook->value != '')?$social->value:'#'; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/facebook.svg" class="js-img-to-svg" alt="Facebook"></a>
					<a href="<?php echo ($instagram->value != '')?$social->value:'#'; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/instagram.svg" class="js-img-to-svg" alt="Instagram"></a>
				</div>
			</li>
		</ul>
	</div>
</div>