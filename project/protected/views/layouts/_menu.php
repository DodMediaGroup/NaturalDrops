<?php $ruta = explode("/",Yii::app()->request->pathInfo); ?>

<div class="container principal-menu">
	<h1 class="principal-logo"><a class="super-div" href="<?php echo Yii::app()->homeUrl; ?>"></a></h1>
	<nav>
		<ul>
			<li><a href="<?php echo $this->createUrl('nosotros/') ?>" class="<?php echo (strtolower($ruta[0]) == "nosotros")?"active":""; ?>">NOSOTROS</a></li>
			<li><a href="<?php echo $this->createUrl('beneficios/') ?>" class="<?php echo (strtolower($ruta[0]) == "beneficios")?"active":""; ?>">BENEFICIOS</a></li>
			<li><a href="<?php echo $this->createUrl('productos/') ?>" class="<?php echo (strtolower($ruta[0]) == "productos")?"active":""; ?>">PRODUCTOS</a></li>
			<li><a href="<?php echo $this->createUrl('puntos_venta/') ?>" class="<?php echo (strtolower($ruta[0]) == "puntos_venta")?"active":""; ?>">PUNTOS DE VENTA</a></li>
			<li><a href="<?php echo $this->createUrl('blog/') ?>" class="<?php echo (strtolower($ruta[0]) == "blog")?"active":""; ?>">BLOG</a></li>
			<li><a href="<?php echo $this->createUrl('preguntas_frecuentes/') ?>" class="<?php echo (strtolower($ruta[0]) == "preguntas_frecuentes")?"active":""; ?>">PREGUNTAS FRECUENTES</a></li>
		</ul>
		<div class="social">
			<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/twitter.svg" class="js-img-to-svg" alt="Twitter"></a>
			<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/facebook.svg" class="js-img-to-svg" alt="Facebook"></a>
		</div>
		<div class="button">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</div>
	</nav>
	<div class="menu_responsive">
		<ul>
			<li><a href="<?php echo $this->createUrl('nosotros/') ?>" class="<?php echo (strtolower($ruta[0]) == "nosotros")?"active":""; ?>">NOSOTROS</a></li>
			<li><a href="<?php echo $this->createUrl('beneficios/') ?>" class="<?php echo (strtolower($ruta[0]) == "beneficios")?"active":""; ?>">BENEFICIOS</a></li>
			<li><a href="<?php echo $this->createUrl('productos/') ?>" class="<?php echo (strtolower($ruta[0]) == "productos")?"active":""; ?>">PRODUCTOS</a></li>
			<li><a href="<?php echo $this->createUrl('puntos_venta/') ?>" class="<?php echo (strtolower($ruta[0]) == "puntos_venta")?"active":""; ?>">PUNTOS DE VENTA</a></li>
			<li><a href="<?php echo $this->createUrl('blog/') ?>" class="<?php echo (strtolower($ruta[0]) == "blog")?"active":""; ?>">BLOG</a></li>
			<li><a href="<?php echo $this->createUrl('preguntas_frecuentes/') ?>" class="<?php echo (strtolower($ruta[0]) == "preguntas_frecuentes")?"active":""; ?>">PREGUNTAS FRECUENTES</a></li>
		</ul>
	</div>
</div>