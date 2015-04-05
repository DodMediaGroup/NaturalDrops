<article class="section">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light">
				NOSOTROS
			</h1>
		</header>
		<div class="article">
			<?php echo $page->content; ?>
		</div>
		<div class="formulacion">
			<p>FORMULACIÓN <small>+</small> PROYECTO <small>+</small> PRODUCCIÓN</p>
			<div class="images">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/produccion.png" alt="">
			</div>
		</div>
	</div>
</article>

<section class="article" style="margin-bottom: 60px;">
	<div class="container">
		<header>
			<h1 class="out_line"><span></span>EL EQUIPO</h1>
		</header>
		<div class="testimonials">
			<?php foreach ($team as $key => $integrant) { ?>
				<div class="col-sm-4 testimony efect-bottom">
					<div class="img" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/team/<?php echo $integrant->image; ?>)"></div>
					<div class="filter"></div>
					<div class="text">
						<div>
							<p><strong><?php echo $integrant->name; ?></strong></p>
							<p><?php echo $integrant->office; ?></p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

<section class="section parallax suscription" data-image-src="<?php echo Yii::app()->request->baseUrl; ?>/images/marihuana.jpg">
	<div class="container efect-bottom">
		<p class="border-middle">
			<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/send.svg" class="js-img-to-svg"></span>
			TENEMOS LA INTENCIÓN DE DESPEJAR TODAS TUS DUDAS<br>ESCRÍBENOS AL CORREO: HOLA@NATURALDROPS.COM
		</p>
	</div>
</section>

<div class="divisor"></div>