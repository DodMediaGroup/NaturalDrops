<div class="principal-slide">
	<?php
		$slides = Slide::model()->findAllByAttributes(array('status'=>1), array('order'=>'t.id_slide DESC'));
		foreach ($slides as $key => $slide) { ?>
			<div class="item-slide">
				<?php foreach ($slide->imagesSlides as $key => $image) { ?>
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide/<?php echo $image->path; ?>" alt="Slide Natural Drops">
				<?php } ?>
			</div>
		<?php }
	?>
</div>