<section class="section principal-footer">
	<div id="map-footer" class="map">
		<a href="<?php echo $this->createUrl('puntos_venta/') ?>" class="link">
			<p><span></span><strong>encuentra la</strong><br>tienda más cercana</p>
		</a>
		<script>
			footerLocation = [{
		        icon: "<?php echo Yii::app()->request->baseUrl; ?>/images/icon-map.svg",
		        lat: 6.248365,
		        lng: -75.594243,
		        html: '<div class="text map-overlay">'+
		        		'<p>OFICINA</p>'+
		        		'<p><strong>PRINCIPAL</strong></p>'+
					'</div>',
		        animation: google.maps.Animation.DROP,
		        title: 'Oficina Principal'
		    }];
		</script>
	</div>
	<div class="contact">
		<div class="filter">
			<div class="container">
				<div class="col-xs-6 col-izq">
					<div class="contain">
						<h2>MENÚ</h2>
						<ul>
							<li><a href="<?php echo $this->createUrl('nosotros/') ?>">Nosotros</a></li>
							<li><a href="<?php echo $this->createUrl('beneficios/') ?>">Beneficios</a></li>
							<li><a href="<?php echo $this->createUrl('productos/') ?>">Productos</a></li>
							<li><a href="<?php echo $this->createUrl('puntos_venta/') ?>">Puntos de venta</a></li>
							<li><a href="<?php echo $this->createUrl('blog/') ?>">Blog</a></li>
							<li><a href="<?php echo $this->createUrl('preguntas_frecuentes/') ?>">Preguntas frecuentes</a></li>
						</ul>
						<h2>CONTÁCTANOS</h2>
						<address>
							<?php $contact = Variables::model()->findByPk(4); ?>
							<p><?php echo $contact->value; ?></p>
							<?php $contact = Variables::model()->findByPk(6); ?>
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
							<form action="#">
								<input type="text" placeholder="Nombre">
								<input type="text" placeholder="Correo electrónico">
								<textarea placeholder="Comentario"></textarea>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer><p>Natural Drops © Todos los derechos reservados 2015</p></footer>
</section>