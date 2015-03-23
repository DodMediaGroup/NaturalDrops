<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Natural Drops</title>

	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/custom_scrollbar/jquery.mCustomScrollbar.min.css">
	
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/logos/favicon.ico">

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/config.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Maps -->
    <script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/maplace-0.1.3.min.js"></script>
</head>
<body>
	<div class="modal-loading active"></div>

	<?php $backgroundSlide = Variables::model()->findByPk(1); ?>
	<header class="principal-header <?php echo ($this->slide)?'slide-container':''; ?>" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/slide/<?php echo $backgroundSlide->value; ?>)">
		<?php $this->renderPartial('//layouts/_menu'); ?>
		<?php if($this->slide){
			$this->renderPartial('//layouts/_slide');
		}?>
	</header>

	<?php echo $content; ?>

	<?php $this->renderPartial('//layouts/_footer'); ?>
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/smoove/jquery.smoove.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/parallax/parallax.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/elevate_zoom/jquery.elevateZoom-3.0.8.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/custom_scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
</body>
</html>