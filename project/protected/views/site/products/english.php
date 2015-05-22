<section class="section products">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/cannabis.svg" class="js-img-to-svg" alt="Productos"></span>
				<?php echo MyMethods::myStrtoupper($page->name); ?>
			</h1>
		</header>
		<div class="container">
			<div class="col-sm-6">
				<div class="img image-zoom" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/product.png)" data-zoom-image="<?php echo Yii::app()->request->baseUrl; ?>/images/product.png">
				</div>
			</div>
			<div class="col-sm-6">
				<h1 class="title">Dermal Cream</h1>
				<p class="description">Based cream cannabis to relieve pain, inflammation, skin conditions and circulatory problems.</h2>
				<div class="my-collapse">
					<h2 class="show">Benefits <span></span></h2>
					<div class="collapse">
						<p>Drops natural cream serves to alleviate conditions associated with muscle and joint diseases, like skin problems and circulation.</p>
						<p>Besides Cannabis as a main component Natural Drops, has in its formula Chestnut and Arnica that will enhance the anti-inflammatory and analgesic properties of cannabis. It was also included Aloe Vera and Vitamin E Chamomile which favor its absorption and add wetting properties recuperative and skin tissues.</p>
						<h3>PAIN AND INFLAMMATION</h3>
						<ul>
							<li>Arthritis and osteoarthritis</li>
							<li>Muscle and joint pain</li>
							<li>Sports injuries</li>
							<li>Inflammation</li>
							<li>Muscular stress</li>
						</ul>
						<h3>SKIN PROBLEMS</h3>
						<ul>
							<li>Psoriasis</li>
							<li>Dryness</li>
							<li>Minor burns</li>
							<li>Cutaneous stress</li>
						</ul>
						<h3>CIRCULATORY PROBLEMS</h3>
						<ul>
							<li>Varicose veins</li>
							<li>Bruising</li>
						</ul>
					</div>	
				</div>
				<div class="my-collapse">
					<h2 class="show">Recommended <span></span></h2>
					<div class="collapse">
						<p>Apply at least twice daily in the treatment area and spread on the skin with a gentle massage until it is completely absorbed.</p>
					</div>
				</div>
				<div class="my-collapse">
					<h2 class="show">Precautions <span></span></h2>
					<div class="collapse">
						<p>External use only. Keep out of the reach of children. Avoid contact with the eyes. Hypersensitivity to any component.</p>
					</div>
				</div>
				<h2>Quantity:</h2>
				<p class="presentations">100 gr</p>
				<h2 class="title">Price <span>$ 32.000</span></h2>
				<div class="buttons">
					<div class="col-md-6">
						<a href="<?php echo $this->createUrl('productos/?sale=true') ?>" id="modal_sale"><span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/markers.svg" class="js-img-to-svg"></span> BUY ONLINE</a>
					</div>
					<div class="col-md-6">
						<a href="<?php echo $this->createUrl('puntos_venta/') ?>"><span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/maps.svg" class="js-img-to-svg"></span> POINT OF SALE CLOSE</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section parallax link-marker" data-image-src="<?php echo Yii::app()->request->baseUrl; ?>/images/backgrounds/imagen-landing-footer.jpg">
	<div class="panel efect-right">
		<div class="contain">
			<p>MEDICAL CANNABIS IS AN EFFECTIVE ANALGESIC, ANTI-INFLAMMATORY, ANTISPASMODIC, AND ANTICONVULSANT.</p>

			<a href="<?php echo $this->createUrl('beneficios/') ?>" class="link">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/circle.svg" class="js-img-to-svg">
				<div class="text">
					<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/cannabis.svg" class="js-img-to-svg"></span>
					<p><strong>OTHER</strong></p>
					<p><strong>TREATMENTS</strong></p>
					<p>SEE HERE</p>
				</div>
			</a>
		</div>
	</div>
</section>