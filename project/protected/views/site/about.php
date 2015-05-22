<article class="section">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/cannabis.svg" class="js-img-to-svg" alt="Beneficios"></span>
				<?php echo MyMethods::myStrtoupper($page->title); ?>
			</h1>
		</header>
		<div class="article">
			<?php echo $page->content; ?>
		</div>
	</div>
</article>

<!--<section class="section parallax suscription" data-image-src="<?php echo Yii::app()->request->baseUrl; ?>/images/backgrounds/imagen-landing-footer.jpg">
	<div class="container efect-bottom">
		<p class="border-middle">
			<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/send.svg" class="js-img-to-svg"></span>
			TENEMOS LA INTENCIÓN DE DESPEJAR TODAS TUS DUDAS<br>ESCRÍBENOS AL CORREO: HOLA@NATURALDROPS.COM
		</p>
	</div>
</section>-->