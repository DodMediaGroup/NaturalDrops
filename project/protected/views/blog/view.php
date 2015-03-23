<?php $date = date_format(date_create($article->date), 'd-m-Y'); ?>
<section class="section">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/blogs.svg" class="js-img-to-svg" alt="Blogs"></span>
				BLOG
			</h1>
		</header>
		<article class="blog-article efect-bottom">
			<div class="header"></div>
			<header>
				<div class="img" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/articles/<?php echo $article->image; ?>)"></div>
				<h1><?php echo $article->title; ?></h1>
				<p><?php echo ucwords(Yii::app()->dateFormatter->format("MMMM dd',' yyyy", $date)); ?> / por <?php echo $article->user0->name; ?></p>
			</header>
			<div class="text">
				<?php echo $article->article; ?>
			</div>
			<footer>
				<p><span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/item.png"></span><strong>Fuente: </strong><a href="<?php echo $article->source; ?>"><?php echo $article->source; ?></a></p>
			</footer>
		</article>
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