<section class="section home-beneficios">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/leaf.svg" class="js-img-to-svg" alt="Beneficios"></span>
				<?php echo MyMethods::myStrtoupper($page->name); ?>
			</h1>
		</header>
		<div class="container">
			<div class="my-col-md-7 my-col-sm-12 beneficio-product">
				<div class="circle circle-green">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/circle.svg" alt="" class="js-img-to-svg efect-circle">
				</div>
				<div class="text">
					<p>Arnica</p>
					<p>Chamomile</p>
					<p><strong>CANNABIS</strong></p>
					<p>Aloe vera</p>
					<p>Vitamin E</p>
					<p>Castaño <small>de Indias</small></p>
				</div>
				<div class="product efect-left"></div>
			</div>
			<div class="my-col-md-5 my-col-sm-12">
				<h2>PAIN AND INFLAMMATION</h2>
				<ul>
					<li>Arthritis and osteoarthritis</li>
					<li>Muscle and joint pain</li>
					<li>Sports injuries</li>
					<li>Inflammation</li>
					<li>Muscular stress</li>
				</ul>
				<h2>SKIN PROBLEMS</h2>
				<ul>
					<li>Psoriasis</li>
					<li>Dryness</li>
					<li>Minor burns</li>
					<li>Cutaneous stress</li>
				</ul>
				<h2>CIRCULATORY PROBLEMS</h2>
				<ul>
					<li>Varicose veins</li>
					<li>Bruising</li>
				</ul>
			</div>
		</div>
	</div>
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
</section>

<section class="section parallax home_question" data-image-src="<?php echo Yii::app()->request->baseUrl; ?>/images/backgrounds/imagen-landing-preguntas-frecuentes.jpg">
	<div class="container efect-bottom">
		<header>
			<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/cannabis.svg" class="js-img-to-svg"></span>
			<h1><?php echo $question->question; ?></h1>
		</header>
		<a href="<?php echo $this->createUrl('preguntas_frecuentes/#'.MyMethods::normalizarUrl($question->question)) ?>" class="principal-title btn-green-light">
			<p><?php echo $question->precise; ?></p>
			Click here to continue reading
		</a>
		<div class="link">
			<a href="<?php echo $this->createUrl('preguntas_frecuentes/') ?>" class="js-link-hover">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/cannabis.svg" alt="" class="js-img-to-svg"></span>
				<p>QUESTIONS</p>
				<strong>FREQUENTLY</strong>
			</a>
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/circle.svg" alt="" class="js-img-to-svg">
		</div>
	</div>
</section>