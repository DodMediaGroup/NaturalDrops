<div class="page-heading">
    <h1>Administración Tiendas</h1>
</div>

<div class="row">
    <div class="col-md-12">
		<div class="widget">
			<div class="widget-content">
				<div class="widget-header transparent">
					<div class="additional-btn">
						<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
					</div>
				</div>
				<div class="data-table-toolbar">
					<div class="row">
						<div class="col-md-8 col-md-offset-4">
							<div class="toolbar-btn-action">
								<a class="btn btn-success" href="<?php echo $this->createUrl('stores/create'); ?>"><i class="fa fa-plus-circle"></i> Add new</a>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="table-responsive">
					<form class='form-horizontal' role='form'>
						<table class="table table-striped table-bordered js-data-table" cellspacing="0" width="100%">
					        <thead>
					            <tr align="center">
									<th>#</th>
									<th>Acciones</th>
									<th>Nombre</th>
									<th>Ciudad</th>
									<th>Dirección</th>
									<th>Estado</th>
								</tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>#</th>
									<th>Acciones</th>
									<th>Nombre</th>
									<th>Ciudad</th>
									<th>Dirección</th>
									<th>Estado</th>
					            </tr>
					        </tfoot>
					 
					        <tbody>
					            <?php
					            	foreach ($stores as $key => $store) { ?>
										<tr>
											<td style="text-align:center;"><?php echo $key+1; ?></td>
											<td style="width:120px;">
												<div class="btn-group btn-group-xs">
													<a href="<?php echo $this->createUrl('stores/'.$store->id_store); ?>" data-toggle="tooltip" title="Ver" class="btn btn-default"><i class="fa fa-external-link"></i></a>
													<a href="<?php echo $this->createUrl('stores/update/'.$store->id_store); ?>" data-toggle="tooltip" title="Editar" class="btn btn-default"><i class="fa fa-edit"></i></a>
													<?php if($store->status == 1){ ?>
														<a href="<?php echo $this->createUrl('stores/status')."/".$store->id_store; ?>" data-toggle="tooltip" title="Ocultar" class="btn btn-default"><i class="fa fa-minus-circle"></i></a>
													<?php } else{ ?>
														<a href="<?php echo $this->createUrl('stores/status')."/".$store->id_store; ?>" data-toggle="tooltip" title="Mostrar" class="btn btn-default"><i class="fa fa-check"></i></a>
													<?php } ?>
													<a data-msj='¿Esta seguro de querer eliminar <?php echo $store->name; ?>? Despues no podra recuperarlo, recuerde que otra opción es dejarlo oculto.' href="<?php echo $this->createUrl('stores/stores_delete')."/".$store->id_store; ?>" data-toggle="tooltip" title="Eliminar" class="js-confirm btn btn-default"><i class="fa fa-power-off"></i></a>
												</div>
											</td>
											<td><?php echo $store->name; ?></td>
											<td><?php echo $store->city0->name; ?></td>
											<td><?php echo $store->address; ?></td>
											<td><span class="label label-<?php echo($store->status == 1)?"success":"warning" ?>"><?php echo ($store->status == 1)?'Activo':'Oculto'; ?></span></td>
										</tr>
									<?php }
								?>
					        </tbody>
					    </table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>