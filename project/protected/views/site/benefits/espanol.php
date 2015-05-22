<section class="section page-beneficios">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/leaf.svg" class="js-img-to-svg" alt="Beneficios"></span>
				<?php echo MyMethods::myStrtoupper($page->name); ?>
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
						<p>Vitamina E</p>
						<p>Castaño <small>de Indias</small></p>
					</div>
				</div>
			</div>
			<div class=" text panel">
				<p>
					Natural Drops es una crema natural cuyo principal componente activo es el cannabis, combinado además con otros elementos de comprobada efectividad como el aloe vera, castaño de indias, manzanilla y árnica.
				</p>
			</div>
			<div class="text">
				<p>
					Los componentes activos del cannabis encajan como llaves dentro dentro del sistema endocanabinoide, gracias a los receptores cannabinoides. Estos receptores controlan diversos procesos químicos de nuestro organismo como el dolor, algunas reacciones nerviosas o la infamación.
				</p>
			</div>
			<div class="text link">
				<div class="link-to-shop">
					<div class="block">
						<p>COMPARADO CON OTRAS ALTERNATIVAS MÉDICAS, EL CANNABIS TIENE 20 VECES MÁS POTENCIA ANTIINFLAMATORIA QUE LA ASPIRINA Y DOS VECES MÁS QUE LA HIDROCORTISONA.</p>
						<div class="link efect-scale">
							<a href="<?php echo $this->createUrl('productos/') ?>" class="js-link-hover">
								<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/cannabis.svg" alt="" class="js-img-to-svg"></span>
								<p>ADQUIÉRELA</p>
								<strong>AQUÍ</strong>
							</a>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/circle.svg" alt="" class="js-img-to-svg">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section parallax suscription" data-image-src="<?php echo Yii::app()->request->baseUrl; ?>/images/backgrounds/imagen-landing-footer.jpg">
	<div class="container efect-bottom">
		<p class="sin-border">
			El cannabis contiene alrededor de 500 componentes, de los cuales 80 son usados para la medicina y la ciencia.
		</p>
	</div>
</section>