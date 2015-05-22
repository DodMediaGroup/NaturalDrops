<div class="principal-slide">
	<?php
		$slides = Slide::model()->findAllByAttributes(array('status'=>1, 'language'=>Yii::app()->request->cookies['language']), array('order'=>'t.id_slide ASC'));
		if(count($slides) == 0)
			$slides = Slide::model()->findAllByAttributes(array('status'=>1), array('order'=>'t.id_slide ASC'));
		
		foreach ($slides as $key => $slide) { ?>
			<div class="item-slide">
				<?php foreach ($slide->imagesSlides as $key => $image) { ?>
					<?php if($slide->link != ''){ ?>
						<a href="<?php echo $slide->link; ?>">
					<?php } ?>
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide/<?php echo $image->path; ?>" alt="Slide Natural Drops">
					<?php if($slide->link != ''){ ?>
						</a>
					<?php } ?>
				<?php } ?>
			</div>
		<?php }
	?>
</div>
<div class="background-slide">
	<?php
		foreach ($slides as $key => $slide){ ?>
			<div class="slide" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/slide/<?php echo $slide->background; ?>);"></div>
		<?php }
	?>
</div>