<div class="page-heading">
    <h1><?php echo $store->name; ?></h1>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="widget">
			<div class="widget-header transparent">
				<h2><strong>Tienda</strong></h2>
				<div class="additional-btn">
					<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
				</div>
			</div>
			<div class="widget-content padding">
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<p><strong>Nombre</strong></p>
							<p><?php echo $store->name; ?></p>
						</div>
						<div class="form-group">
							<p><strong>Télefono</strong></p>
							<p><?php echo $store->phone; ?><?php echo ($store->phone == '')?'No registra':''; ?></p>
						</div>
						<div class="form-group">
							<p><strong>Correo electrónico</strong></p>
							<p><?php echo $store->email; ?><?php echo ($store->email == '')?'No registra':''; ?></p>
						</div>
						<div class="form-group">
							<p><strong>Página web</strong></p>
							<p><?php echo $store->website; ?><?php echo ($store->website == '')?'No registra':''; ?></p>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<p><strong>Ciudad</strong></p>
							<p><?php echo $store->city0->name.' - '.$store->city0->country0->name; ?></p>
						</div>
						<div class="form-group">
							<p><strong>Barrio/Localidad</strong></p>
							<p><?php echo $store->locality; ?><?php echo ($store->locality == '')?'No registra':''; ?></p>
						</div>
						<div class="form-group">
							<p><strong>Direccion</strong></p>
							<p><?php echo $store->address; ?><?php echo ($store->address == '')?'No registra':''; ?></p>
						</div>
						<div class="form-group">
							<p><strong>Horario de atención</strong></p>
							<p><?php echo $store->attention; ?><?php echo ($store->attention == '')?'No registra':''; ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div id="gmap" style="height:400px"></div>
						<script>
							markers.push({
								lat: <?php echo $store->lat; ?>,
								lng: <?php echo $store->lng; ?>
							});
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="form-group">
			<a href="<?php echo $this->createUrl('stores/admin'); ?>" class="btn btn-danger">Atras</a>
		</div>
	</div>
</div>