<section class="section page-beneficios">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/leaf.svg" class="js-img-to-svg" alt="Beneficios"></span>
				BENEFICIOS
			</h1>
		</header>
		<div class="producto">
			<div class="producto-graf">
				<img class="img-prod" src="<?php echo Yii::app()->request->baseUrl; ?>/images/product.png" alt="Natural Drops">
				<div class="circle">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/circle.svg" class="js-img-to-svg">
					<div class="msj">
						<p>Árnica</p>
						<p>Manzanilla</p>
						<p><strong>CANNABIS</strong></p>
						<p>Aloe vera</p>
						<p>Castaño <small>de Indias</small></p>
					</div>
				</div>
			</div>
			<div class=" text panel">
				<p>Natural Drops es una crema natural cuyo principal componente activo es el aceite de cannabis, combinado además con otros elementos de comprobada efectividad como el aloe vera, castaño de indias, manzanilla y árnica.</p>
			</div>
			<div class="text">
				<p>Los componentes activos del cannabis encajan como llaves dentro dentro del sistema endocanabinoide, gracias a los receptores cannabinoides. Estos receptores controlan diversos procesos químicos de nuestro organismo como el dolor, algunas reacciones nerviosas o la infamación.</p>
			</div>
		</div>
	</div>
</section>

<section class="section parallax suscription" data-image-src="<?php echo Yii::app()->request->baseUrl; ?>/images/backgrounds/imagen-landing-footer.jpg">
	<div class="container efect-bottom">
		<p class="sin-border">
			Comparado con otras alternativas médicas, el Cannabis tiene 20 veces más potencia antiinfamatoria que la aspirina y dos veces más que la hidrocortisona.
		</p>
	</div>
</section>

<section class="section treatments">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/heart.svg" class="js-img-to-svg" alt="Tratamientos"></span>
				TRATAMIENTOS
			</h1>
		</header>
		<div class="testimonials">
			<?php foreach ($treatments as $key => $treatment) { ?>
				<div class="col-sm-4 testimony js-show-info efect-bottom">
					<div class="img" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/treatments/<?php echo $treatment->image; ?>)"></div>
					<h3 class="name"><?php echo $treatment->treatment; ?></h3>
					<div class="filter"></div>
					<div class="text">
						<div>
							<p><strong><?php echo MyMethods::myStrtoupper($treatment->treatment); ?></strong></p>
						</div>
					</div>
					<div class="info <?php echo ($key >= (count($treatments) - (count($treatments) - 3)))?'info-top':''; ?>">
						<div class="col-md-6">
							<?php echo $treatment->description; ?>
						</div>
						<div class="col-md-6">
							<h3>Beneficios</h3>
							<?php echo $treatment->benefits; ?>
							<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/cannabis.svg" class="js-img-to-svg"></span>
							<p class="used">
								<?php echo $treatment->use; ?>
							</p>
						</div>
						<a href="#" class="close">X</a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>