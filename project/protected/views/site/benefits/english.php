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
						<p>Arnica</p>
						<p>Chamomile</p>
						<p><strong>CANNABIS</strong></p>
						<p>Aloe vera</p>
						<p>Vitamin E</p>
						<p>Castaño <small>de Indias</small></p>
					</div>
				</div>
			</div>
			<div class=" text panel">
				<p>
					Natural Drops is a natural cream whose main active component is cannabis, also combined with other elements of proven effectiveness such as aloe vera, horse chestnut, chamomile and arnica.
				</p>
			</div>
			<div class="text">
				<p>
					The active components of cannabis fit like keys into in the endocannabinoid system by cannabinoid receptors. These receptors control various chemical processes in our body like pain, some nervous reactions or defamation.
				</p>
			</div>
			<div class="text link">
				<div class="link-to-shop">
					<div class="block">
						<p>COMPARED TO OTHER MEDICAL ALTERNATIVES, CANNABIS HAS 20 TIMES MORE ANTI-INFLAMMATORY POTENCY THAN ASPIRIN AND TWICE AS HYDROCORTISONE.</p>
						<div class="link efect-scale">
							<a href="<?php echo $this->createUrl('productos/') ?>" class="js-link-hover">
								<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/cannabis.svg" alt="" class="js-img-to-svg"></span>
								<p>ADQUIÉRELA</p>
								<strong>HERE</strong>
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
			Cannabis contains about 500 components, of which 80 are used for medicine and science.
		</p>
	</div>
</section>