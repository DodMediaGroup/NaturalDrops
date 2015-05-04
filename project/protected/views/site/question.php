<section class="section">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/questions.svg" class="js-img-to-svg" alt="Blogs"></span>
				PREGUNTAS FRECUENTES
			</h1>
		</header>
		<div class="article">
			<?php foreach ($questions as $key => $question) { ?>
				<article class="efect-bottom" id="<?php echo MyMethods::normalizarUrl($question->question); ?>">
					<h1><span></span><?php echo $question->question; ?></h1>
					<p class="important">
						<?php echo $question->precise; ?>
					</p>
					<p><?php echo $question->reply; ?></p>
				</article>
			<?php } ?>
		</div>
	</div>
</section>