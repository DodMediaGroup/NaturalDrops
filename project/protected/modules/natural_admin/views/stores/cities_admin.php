<div class="page-heading">
    <h1>Administración Ciudades</h1>
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
								<a class="btn btn-success" href="<?php echo $this->createUrl('stores/cities_create'); ?>"><i class="fa fa-plus-circle"></i> Add new</a>
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
									<th>Pais</th>
									<th>Estado</th>
								</tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>#</th>
									<th>Acciones</th>
									<th>Nombre</th>
									<th>Pais</th>
									<th>Estado</th>
					            </tr>
					        </tfoot>
					 
					        <tbody>
					            <?php
					            	foreach ($cities as $key => $city) { ?>
										<tr>
											<td style="text-align:center;"><?php echo $key+1; ?></td>
											<td style="width:120px;">
												<div class="btn-group btn-group-xs">
													<a href="<?php echo $this->createUrl('stores/cities_update/'.$city->id_city); ?>" data-toggle="tooltip" title="Editar" class="btn btn-default"><i class="fa fa-edit"></i></a>
													<?php if($city->status == 1){ ?>
														<a href="<?php echo $this->createUrl('stores/cities_status')."/".$city->id_city; ?>" data-toggle="tooltip" title="Ocultar" class="btn btn-default"><i class="fa fa-minus-circle"></i></a>
													<?php } else{ ?>
														<a href="<?php echo $this->createUrl('stores/cities_status')."/".$city->id_city; ?>" data-toggle="tooltip" title="Mostrar" class="btn btn-default"><i class="fa fa-check"></i></a>
													<?php } ?>
													<a data-msj='¿Esta seguro de querer eliminar <?php echo $city->name; ?>? Esto eliminara cualquier tienda registrada en esta ciudad. Despues no podra recuperarlo, recuerde que otra opción es dejarlo oculto.' href="<?php echo $this->createUrl('stores/cities_delete')."/".$city->id_city; ?>" data-toggle="tooltip" title="Eliminar" class="js-confirm btn btn-default"><i class="fa fa-power-off"></i></a>
												</div>
											</td>
											<td><?php echo $city->name; ?></td>
											<td><?php echo $city->country0->name; ?></td>
											<td><span class="label label-<?php echo($city->status == 1)?"success":"warning" ?>"><?php echo ($city->status == 1)?'Activo':'Oculto'; ?></span></td>
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