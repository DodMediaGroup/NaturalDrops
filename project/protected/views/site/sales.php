<section class="section page-contact">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/maps.svg" class="js-img-to-svg" alt="Puntos de venta"></span>
				PUNTOS DE VENTA
			</h1>
		</header>
		<div class="contain">
			<div class="directions">
				<div class="container">
					<h2>BÚSQUEDA</h2>
					<div class="input">
						<select>
							<option value="0">Ciudad</option>
							<option value="1">Medellin</option>
						</select>
					</div>
					<div class="input">
						<select>
							<option value="0">Tienda</option>
							<option value="1">Centro</option>
						</select>
					</div>
					<h2>RESULTADOS</h2>
					<div class="results js-custom-scroll">
						<div class="result">
							<h3>ECOTIENDA</h3>
							<address>
								<p>Dirección: Calle 13 # 45 - 46</p>
								<p>Teléfono: 564 7890</p>
								<p>hola@ecotiendas.co</p>
								<a href="www.ecotiendas.co">www.ecotiendas.co</a>
							</address>
						</div>
						<div class="result">
							<h3>ECOTIENDA</h3>
							<address>
								<p>Dirección: Calle 13 # 45 - 46</p>
								<p>Teléfono: 564 7890</p>
								<p>hola@ecotiendas.co</p>
								<a href="www.ecotiendas.co">www.ecotiendas.co</a>
							</address>
						</div>
						<div class="result">
							<h3>ECOTIENDA</h3>
							<address>
								<p>Dirección: Calle 13 # 45 - 46</p>
								<p>Teléfono: 564 7890</p>
								<p>hola@ecotiendas.co</p>
								<a href="www.ecotiendas.co">www.ecotiendas.co</a>
							</address>
						</div>
						<div class="result">
							<h3>ECOTIENDA</h3>
							<address>
								<p>Dirección: Calle 13 # 45 - 46</p>
								<p>Teléfono: 564 7890</p>
								<p>hola@ecotiendas.co</p>
								<a href="www.ecotiendas.co">www.ecotiendas.co</a>
							</address>
						</div>
					</div>
					<div class="footer">
						<span>CLICK</span>
						<p>Encuentra la tienda más cercana</p>
					</div>
				</div>
			</div>
			<div class="map">
				<div>
					<div class="show-map"></div>
				</div>
			</div>
			<script>
				mapLocations.push(
					{
				        lat: 45.9,
				        lon: 10.9,
				        html: '<h3>Content A1</h3>',
				        icon: 'images/icon-map.png',
				        animation: google.maps.Animation.DROP
				    },
				    {
				        lat: 44.8,
				        lon: 1.7,
				        html: '<h3>Content B1</h3>',
				        icon: 'images/icon-map.png',
				        animation: google.maps.Animation.DROP
				    },
				    {
				        lat: 51.5,
				        lon: -1.1,
				        html: [
				            '<h3>Content C1</h3>',
				            '<p>Lorem Ipsum..</p>'
				        ].join(''),
				        icon: 'images/icon-map.png',
				        animation: google.maps.Animation.DROP
				    }
				);
			</script>
		</div>
	</div>
</section>

<div class="divisor"></div>