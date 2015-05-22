<div class="page-heading">
    <h1>Administración Slide Principal</h1>
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
				<div class="alert alert-info">
                    Dado que el slide principal tiene el efecto parallax, cada item del slide esta compuesto por imagenes separadas por lo que es necesario agruparlas por items. No se preocupe si en las miniaturas de la tabla no se reflejan transparencias en las imagenes, las imagenes que usted carga estan intactas y son las que se muestran en el slide.
                </div>
				<div class="data-table-toolbar">
					<div class="row">
						<div class="col-md-8 col-md-offset-4">
							<div class="toolbar-btn-action">
								<a class="btn btn-success" href="<?php echo $this->createUrl('slide/create'); ?>"><i class="fa fa-plus-circle"></i> Add new</a>
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
									<th>Fondo</th>
									<th>Grupo de imagenes</th>
									<th>Link</th>
									<th>Idioma</th>
									<th>Estado</th>
								</tr>
					        </thead>
					 
					        <tfoot>
					            <tr>
					                <th>#</th>
									<th>Acciones</th>
									<th>Fondo</th>
									<th>Grupo de imagenes</th>
									<th>Link</th>
									<th>idioma</th>
									<th>Estado</th>
					            </tr>
					        </tfoot>
					 
					        <tbody>
					            <?php
					            	foreach ($slides as $key => $slide) { ?>
										<tr>
											<td style="text-align:center;"><?php echo $key+1; ?></td>
											<td style="width:120px;">
												<div class="btn-group btn-group-xs">
													<a href="<?php echo $this->createUrl('slide/update/'.$slide->id_slide); ?>" data-toggle="tooltip" title="Editar" class="btn btn-default"><i class="fa fa-edit"></i></a>
													<?php if($slide->status == 1){ ?>
														<a href="<?php echo $this->createUrl('slide/status')."/".$slide->id_slide; ?>" data-toggle="tooltip" title="Ocultar" class="btn btn-default"><i class="fa fa-minus-circle"></i></a>
													<?php } else{ ?>
														<a href="<?php echo $this->createUrl('slide/status')."/".$slide->id_slide; ?>" data-toggle="tooltip" title="Mostrar" class="btn btn-default"><i class="fa fa-check"></i></a>
													<?php } ?>
													<a data-msj='¿Esta seguro de querer eliminar el item? Despues no podra recuperarlo, recuerde que otra opción es dejarlo oculto.' href="<?php echo $this->createUrl('slide/delete_slide')."/".$slide->id_slide; ?>" data-toggle="tooltip" title="Eliminar" class="js-confirm btn btn-default"><i class="fa fa-power-off"></i></a>
												</div>
											</td>
											<td>
												<div class="img-table">
													<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide/<?php echo $slide->background; ?>">
												</div>
											</td>
											<td>
												<?php foreach ($slide->imagesSlides as $key => $image) { ?>
													<div class="img-table">
														<?php if(count($slide->imagesSlides) > 1){ ?>
															<a href="<?php echo $this->createUrl('slide/deleteImage/'.$image->id_image); ?>" title="Eliminar" class="delete">X</a>
														<?php } ?>
														<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide/200x200/<?php echo $image->path; ?>">
													</div>
												<?php } ?>
											</td>
											<td><a target="_blank" href="<?php echo $slide->link ?>"><?php echo $slide->link ?></a></td>
											<td><span class="label label-primary"><?php echo $slide->language0->name; ?></span></td>
											<td><span class="label label-<?php echo($slide->status == 1)?"success":"warning" ?>"><?php echo ($slide->status == 1)?'Activo':'Oculto'; ?></span></td>
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