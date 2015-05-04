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
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/gmaps/gmaps.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/gmap3/gmap3.min.js"></script>
</head>
<body>
	<div class="modal-loading active"></div>
	<div class="modal-sale">
		<div class="form">
			<span class="close">X</span>
			<p>Solicita nuestros productos en linea</p>
			<form id="form-modal-sale" action="<?php echo $this->createUrl('add_sale/') ?>">
				<div class="form-group">
					<label class="my-hidden-xs" for="sale_name">Nombre:</label>
					<input type="text" id="sale_name" name="name" required placeholder="Nombre">
				</div>
				<div class="form-group">
					<label class="my-hidden-xs" for="sale_email">Correo electrónico:</label>
					<input type="email" id="sale_email" name="email" required placeholder="Correo electrónico">
				</div>
				<div class="form-group">
					<label class="my-hidden-xs" for="sale_phone">Teléfono:</label>
					<input type="text" id="sale_phone" name="phone" required placeholder="Teléfono">
				</div>
				<div class="form-group">
					<label class="my-hidden-xs" for="sale_name">Producto:</label>
					<select name="product" id="sale_product" required placeholder="Producto">
						<option value="Crema Dérmica - Frasco 100gr">Crema Dérmica - Frasco 100gr</option>
					</select>
				</div>
				<div class="form-group">
					<label class="my-hidden-xs" for="sale_quantity">Cantidad:</label>
					<input class="js-input-number" type="text" maxlength="2" id="sale_quantity" name="quantity" required placeholder="Cantidad">
				</div>
				<div class="form-group">
					<span class="error"></span>
				</div>
				<div class="form-group right">
					<button type="submit">REALIZAR PEDIDO</button>
				</div>
			</form>
		</div>
	</div>

	<?php
        $message = Yii::app()->user->getFlash('message');
        if($message != ""){ ?>
            <script type="text/javascript">
                showMessage = <?php echo $message; ?>
            </script>
        <?php }
    ?>

	<?php $backgroundSlide = Variables::model()->findByPk(1); ?>
	<header class="principal-header <?php echo ($this->slide)?'slide-container':''; ?>" style="<?php echo ($this->slide)?('background-image:url('.Yii::app()->request->baseUrl.'/images/slide/'.$backgroundSlide->value.')'):''; ?>">
		<?php $this->renderPartial('//layouts/_menu'); ?>
		<?php if($this->slide){
			$this->renderPartial('//layouts/_slide');
		}?>
	</header>

	<?php echo $content; ?>

	<?php if($this->suscription){ ?>
		<section class="section parallax suscription" data-image-src="<?php echo Yii::app()->request->baseUrl; ?>/images/backgrounds/imagen-landing-footer.jpg">
			<div class="container efect-bottom">
				<h1>RECIBE MÁS INFORMACIÓN</h1>
				<form id="form-suscription" action="<?php echo $this->createUrl('suscripcion/register') ?>">
					<div class="form-group">
						<div class="input">
							<input type="email" name="email" placeholder="Correo electrónico" required>
						</div>
						<div class="button">
							<button type="submit">Enviar</button>
						</div>
					</div>
				</form>
			</div>
		</section>
		<div class="divisor"></div>
	<?php } ?>

	<?php if($this->showEmailContact){
		$contactEmail = Variables::model()->findByPk(4);
	?>
		<section class="section parallax suscription" data-image-src="<?php echo Yii::app()->request->baseUrl; ?>/images/backgrounds/imagen-landing-footer.jpg">
			<div class="container efect-bottom">
				<p>
					<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/send.svg" class="js-img-to-svg"></span>
					TENEMOS LA INTENCIÓN DE DESPEJAR TODAS TUS DUDAS<br>ESCRÍBENOS AL CORREO: <?php echo MyMethods::myStrtoupper($contactEmail->value); ?>
				</p>
			</div>
		</section>
		<div class="divisor"></div>
	<?php } ?>

	<?php $this->renderPartial('//layouts/_footer'); ?>
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/smoove/jquery.smoove.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/parallax/parallax-plugin.js"></script>
	<!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/parallax/parallax.min.js"></script>-->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/elevate_zoom/jquery.elevateZoom-3.0.8.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/custom_scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
</body>
</html>