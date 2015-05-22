<section class="section page-contact">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/maps.svg" class="js-img-to-svg" alt="Puntos de venta"></span>
				<?php echo MyMethods::myStrtoupper($page->name); ?>
			</h1>
		</header>
		<div class="contain">
			<div class="directions">
				<div class="container">
					<?php $this->renderPartial('sales/'.MyMethods::normalizarUrl($page->language0->name)); ?>
				</div>
			</div>
			<div class="map">
				<div>
					<div class="arrow js-tablet-map hidden-lg hidden-md">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/arrow.svg" class="js-img-to-svg">
					</div>
					<div class="show-map" id="show-map"></div>
				</div>
			</div>
			<script>
				<?php foreach ($stores as $key => $store) { ?>
					mapLocations.push({
						lat: <?php echo $store->lat; ?>,
						lng: <?php echo $store->lng; ?>,
						id: <?php echo $store->id_store; ?>,
						name: '<?php echo $store->name; ?>',
						country: {
							id: <?php echo $store->city0->country0->id_country; ?>,
							name: '<?php echo $store->city0->country0->name; ?>'
						},
						city: {
							id: <?php echo $store->city0->id_city; ?>,
							name: '<?php echo $store->city0->name; ?>'
						},
						locality: '<?php echo $store->locality; ?>',
						attention: '<?php echo $store->attention; ?>',
						address: '<?php echo $store->address; ?>',
						phone: '<?php echo $store->phone; ?>',
						email: '<?php echo $store->email; ?>',
						website: '<?php echo $store->website; ?>',
						icon: "<?php echo Yii::app()->request->baseUrl; ?>/images/icon-map.svg",
				        animation: google.maps.Animation.DROP,
				        show: true
					});
				<?php } ?>
			</script>
		</div>
	</div>
</section>

<div class="divisor"></div>