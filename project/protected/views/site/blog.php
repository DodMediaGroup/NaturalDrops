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