<?php
	$menu = Menus::model()->findByAttributes(array('language'=>Yii::app()->request->cookies['language'], 'status'=>1));
	if($menu == null)
		$menu = Menus::model()->findByPk(1);

	$text = '<span></span><strong>encuentra la</strong><br>tienda más cercana';
	if(Yii::app()->request->cookies['language'] == '2')
		$text = '<span></span><strong>find the</strong><br>nearest store';
?>

<section class="section principal-footer">
	<div id="map-footer" class="map">
		<div class="google-map"></div>
		<a href="<?php echo $this->createUrl('puntos_venta/') ?>" class="link">
			<p><?php echo $text; ?></p>
		</a>
		<script>
			<?php
		    $stores = Stores::model()->findAllByAttributes(array('status'=>1), array('limit'=>1));
		    foreach ($stores as $key => $store) { ?>
				footerLocation.push({
					lat: <?php echo $store->lat; ?>,
					lng: <?php echo $store->lng; ?>,
					icon: "<?php echo Yii::app()->request->baseUrl; ?>/images/icon-map.svg",
					html: '',
			        animation: google.maps.Animation.DROP,
			        show: true
				});
			<?php } ?>
		</script>
	</div>
	<div class="contact">
		<div class="filter">
			<div class="container">
				<div class="col-xs-6 col-izq">
					<div class="contain">
						<h2>MENÚ</h2>
						<ul>
							<?php foreach ($menu->menuItems as $key => $item) { ?>
								<li><a href="<?php echo $this->createUrl($item->page0->navigation.'/') ?>"><?php echo $item->page0->name; ?></a></li>
							<?php } ?>
						</ul><br>
						<h2>CONTÁCTANOS</h2>
						<address>
							<?php $contact = Variables::model()->findByPk(4); ?>
							<p><?php echo $contact->value; ?></p>
							<?php $contact = Variables::model()->findByPk(5); ?>
							<p><?php echo $contact->value; ?></p>
						</address>
					</div>
				</div>
				<div class="col-xs-6 col-der">
					<div class="contain social">
						<div>
							<h2>ENCUÉNTRANOS EN:</h2>
							<?php $instagram = Variables::model()->findByPk(3); ?>
							<a target="_blank" href="<?php echo ($instagram->value != '')?$instagram->value:'#'; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/instagram.svg" class="js-img-to-svg"></a>
							<?php $facebook = Variables::model()->findByPk(2); ?>
							<a target="_blank" href="<?php echo ($facebook->value != '')?$facebook->value:'#'; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/facebook.svg" class="js-img-to-svg"></a>
						</div>
					</div>
					<div class="contain form-contact">
						<div>
							<h2>ESCRÍBENOS</h2>
							<form id="form-contact" action="<?php echo $this->createUrl('contacto/') ?>">
								<input type="text" placeholder="Nombre" name="name" required>
								<input type="text" placeholder="Correo electrónico" name="email" required>
								<textarea placeholder="Comentario" name="subject" required></textarea>
								<button type="submit"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/send.svg" class="js-img-to-svg"></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer><p>Natural Drops © Todos los derechos reservados 2015</p></footer>
</section>