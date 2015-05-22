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
					<p>Árnica</p>
					<p>Manzanilla</p>
					<p><strong>CANNABIS</strong></p>
					<p>Aloe vera</p>
					<p>Vitamina E</p>
					<p>Castaño <small>de Indias</small></p>
				</div>
				<div class="product efect-left"></div>
			</div>
			<div class="my-col-md-5 my-col-sm-12">
				<h2>DOLORES E INFLAMACIÓN</h2>
				<ul>
					<li>Artritis y artrosis</li>
					<li>Dolores musculares y articulares</li>
					<li>Lesiones deportivas</li>
					<li>Inflamación</li>
					<li>Estrés muscular</li>
				</ul>
				<h2>PROBLEMAS DE LA PIEL</h2>
				<ul>
					<li>Psoriasis</li>
					<li>Resequedad</li>
					<li>Quemaduras leves</li>
					<li>Estrés cutáneo</li>
				</ul>
				<h2>PROBLEMAS CIRCULATORIOS</h2>
				<ul>
					<li>Venas varices</li>
					<li>Hematomas</li>
				</ul>
			</div>
		</div>
	</div>
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
</section>

<section class="section parallax home_question" data-image-src="<?php echo Yii::app()->request->baseUrl; ?>/images/backgrounds/imagen-landing-preguntas-frecuentes.jpg">
	<div class="container efect-bottom">
		<header>
			<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/cannabis.svg" class="js-img-to-svg"></span>
			<h1><?php echo $question->question; ?></h1>
		</header>
		<a href="<?php echo $this->createUrl('preguntas_frecuentes/#'.MyMethods::normalizarUrl($question->question)) ?>" class="principal-title btn-green-light">
			<p><?php echo $question->precise; ?></p>
			Clic acá para seguir leyendo
		</a>
		<div class="link">
			<a href="<?php echo $this->createUrl('preguntas_frecuentes/') ?>" class="js-link-hover">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/cannabis.svg" alt="" class="js-img-to-svg"></span>
				<p>PREGUNTAS</p>
				<strong>FRECUENTES</strong>
			</a>
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/circle.svg" alt="" class="js-img-to-svg">
		</div>
	</div>
</section>