<section class="section home-beneficios">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/leaf.svg" class="js-img-to-svg" alt="Beneficios"></span>
				BENEFICIOS
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
					<p>Aloe vera</p>
					<p>Castaño <small>de Indias</small></p>
				</div>
				<div class="product efect-left"></div>
			</div>
			<div class="my-col-md-5 my-col-sm-12">
				<ul>
					<li>Artritis y Artrosis</li>
					<li>Dolres musculares y articulares</li>
					<li>Inflamación</li>
					<li>Problemas de Circulación</li>
					<li>Psoriasis</li>
					<li>Venas varices</li>
					<li>Quemadura leves</li>
					<li>Estrés cutáneo y múscular</li>
					<li>Hematomas</li>
					<li>Heridas postquirúrgicas</li>
					<li>Resequedad en la piel</li>
					<li>Lesiones deportivas</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="link-to-shop">
		<div class="block">
			<p>COMPARADO CON OTRAS ALTERNATIVAS MÉDICAS, EL CANNABIS TIENE 20 VECES MÁS POTENCIA ANTIINFLAMATORIA QUE LA ASPIRINA T 2 VECES MÁS QUE LA HIDROCORTISONA.</p>
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

<section class="section parallax home_question" data-image-src="<?php echo Yii::app()->request->baseUrl; ?>/images/marihuana.jpg">
	<div class="container efect-bottom">
		<header>
			<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/cannabis.svg" class="js-img-to-svg"></span>
			<h1>¿LA CREMA TIENE EFECTOS SECUNDARIOS?</h1>
		</header>
		<a href="#" class="principal-title btn-green-light">
			<p>No, la crema no tiene efectos ya que...</p>
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

<section class="section">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/dialog.svg" class="js-img-to-svg" alt="Testimonios"></span>
				TESTIMONIOS
			</h1>
		</header>
		<div class="testimonials">
			<?php
				foreach ($testimonials as $key => $testimony) { ?>
					<div class="col-sm-4 testimony efect-bottom">
						<div class="img" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/testimonials/<?php echo $testimony->image; ?>)"></div>
						<h3 class="name"><?php echo $testimony->name; ?></h3>
						<div class="filter"></div>
						<div class="text js-custom-scroll">
							<div>
								<?php echo $testimony->testimony; ?>
							</div>
						</div>
					</div>
				<?php }
			?>
		</div>
	</div>
</section>

<div class="section parallax divisor" data-image-src="<?php echo Yii::app()->request->baseUrl; ?>/images/rocks_river.jpg"></div>

<section class="section">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/blogs.svg" class="js-img-to-svg" alt="Blogs"></span>
				BLOG
			</h1>
		</header>
		<?php
			foreach ($articles as $key => $article) {
				$date = date_format(date_create($article->date), 'd-m-Y');
			?>
				<article class="blog-article efect-bottom">
					<div class="header"></div>
					<header>
						<div class="img" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/articles/<?php echo $article->image; ?>)"></div>
						<h1><?php echo $article->title; ?></h1>
						<p><?php echo ucwords(Yii::app()->dateFormatter->format("MMMM dd',' yyyy", $date)); ?> / por <?php echo $article->user0->name; ?></p>
					</header>
					<div class="text">
						<p>
							<?php echo substr(strip_tags($article->article), 0, 450); ?>...
						</p>
					</div>
					<div class="link">
						<a href="<?php echo $this->createUrl('blog/'.MyMethods::normalizarUrl($article->title)) ?>" class="principal-title btn-green-light">Seguir leyendo</a>
					</div>
				</article>
			<?php }
		?>
	</div>
</section>

<section class="section parallax suscription" data-image-src="<?php echo Yii::app()->request->baseUrl; ?>/images/marihuana.jpg">
	<div class="container efect-bottom">
		<h1>RECIBE NUESTRA INFORMACIÓN</h1>
		<form action="#">
			<div class="form-group">
				<div class="input">
					<input type="email" placeholder="Correo electrónico">
				</div>
				<div class="button">
					<button type="submit">Enviar</button>
				</div>
			</div>
		</form>
	</div>
</section>

<div class="divisor"></div>