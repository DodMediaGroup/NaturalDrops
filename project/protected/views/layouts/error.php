<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Error - Natural Drops</title>

	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/custom_scrollbar/jquery.mCustomScrollbar.min.css">
	
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/logos/favicon.ico">

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/config.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="modal-loading active"></div>

	<?php echo $content; ?>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/smoove/jquery.smoove.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/parallax/parallax.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/custom_scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
</body>
</html>