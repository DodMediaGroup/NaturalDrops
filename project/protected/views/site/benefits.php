<?php $this->renderPartial('benefits/'.MyMethods::normalizarUrl($page->language0->name), array(
	'page'=>$page
)); ?>

<section class="section treatments">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/heart.svg" class="js-img-to-svg" alt="Tratamientos"></span>
				<?php if(Yii::app()->request->cookies['language'] == '2'){ ?>
					TREATMENTS
				<?php }
				else{ ?>
					TRATAMIENTOS
				<?php } ?>
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