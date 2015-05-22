<?php
	$page = PagesSite::model()->findByAttributes(array('principal'=>4, 'language'=>Yii::app()->request->cookies['language']));
	if($page == null)
		$page = PagesSite::model()->findByPk(4);

	$this->renderPartial('home/'.MyMethods::normalizarUrl($page->language0->name), array(
		'question'=>$question,
		'page'=>$page
	));
?>

<section class="section" id="testimonios">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/dialog.svg" class="js-img-to-svg" alt="Testimonios"></span>
				<?php
					if(Yii::app()->request->cookies['language'] == '2')
						echo "TESTIMONIALS";
					else
						echo "TESTIMONIOS";
				?>
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

<div class="section parallax divisor" data-image-src="<?php echo Yii::app()->request->baseUrl; ?>/images/backgrounds/imagen-landing-separador.jpg"></div>

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