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
					<div class="arrow js-tablet-map hidden-lg hidden-md">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/arrow.svg" class="js-img-to-svg">
					</div>
					<div class="show-map"></div>
				</div>
			</div>
			<script>
				mapLocations.push(
					{
				        lat: 4.679616,
				        lng: -74.053486,
				        html: '',
				        title: 'Oficina Principal',
				        icon: "<?php echo Yii::app()->request->baseUrl; ?>/images/icon-map.svg",
				        animation: google.maps.Animation.DROP
				    },
				    {
				        lat: 4.630372,
				        lng: -74.092668,
				        html: '',
				        title: 'Oficina Principal',
				        icon: "<?php echo Yii::app()->request->baseUrl; ?>/images/icon-map.svg",
				        animation: google.maps.Animation.DROP
				    },
				    {
				        lat: 6.248365,
		        		lng: -75.594243,
				        html: '',
				        title: 'Oficina Principal',
				        icon: "<?php echo Yii::app()->request->baseUrl; ?>/images/icon-map.svg",
				        animation: google.maps.Animation.DROP
				    },
				    {
				        lat: 6.222512,
		        		lng: -75.587285,
				        html: '',
				        title: 'Oficina Principal',
				        icon: "<?php echo Yii::app()->request->baseUrl; ?>/images/icon-map.svg",
				        animation: google.maps.Animation.DROP
				    },
				    {
				        lat: 3.430864,
		        		lng: -76.522314,
				        html: '',
				        title: 'Oficina Principal',
				        icon: "<?php echo Yii::app()->request->baseUrl; ?>/images/icon-map.svg",
				        animation: google.maps.Animation.DROP
				    }
				);
			</script>
		</div>
	</div>
</section>

<div class="divisor"></div>