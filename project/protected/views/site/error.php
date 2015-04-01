<?php
//$this->pageTitle=Yii::app()->name . ' - Error';
?>
<div class="page-error">
	<h1 class="principal-logo"><a class="super-div" href="<?php echo Yii::app()->homeUrl; ?>"></a></h1>
	<div class="div-full">
		<div class="contain">
			<div class="image">
				<div class="text">
					<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/cannabis.svg" alt="" class="js-img-to-svg"></span>
					<p>UPS</p>
				</div>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/circle.svg" alt="" class="js-img-to-svg">
			</div>
			<p><?php echo $code; ?> <strong>ERROR</strong></p>
		</div>
	</div>
	<div class="message">
		<p><?php echo CHtml::encode($message); ?></p>
		<a href="<?php echo Yii::app()->homeUrl; ?>">Vuelve a intentarlo</a>
	</div>
</div>