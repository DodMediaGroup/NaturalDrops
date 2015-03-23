<section class="section principal-footer">
	<div id="map-footer" class="map" data-icon="<?php echo Yii::app()->request->baseUrl; ?>/images/icon-map.png">
		<div class="text">
			<p>OFICINA</p>
			<p><strong>PRINCIPAL</strong></p>
		</div>
		<a href="<?php echo $this->createUrl('puntos_venta/') ?>" class="link">
			<p><span></span><strong>encuentra la</strong><br>tienda más cercana</p>
		</a>
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
							<p>correo@gamil.com</p>
							<p>Av. Primavera 45 Of. 302</p>
							<p>(+57) 456 4312</p>
						</address>
					</div>
				</div>
				<div class="col-xs-6 col-der">
					<div class="contain social">
						<div>
							<h2>ENCUENTRANOS</h2>
							<a href="#" class="twitter"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/twitter.svg" class="js-img-to-svg"></a>
							<a href="#" class="facebook"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/facebook.svg" class="js-img-to-svg"></a>
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