<div class="page-heading">
    <h1>Administración Preguntas Frecuentes</h1>
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
								<a class="btn btn-success" href="<?php echo $this->createUrl('questions/create'); ?>"><i class="fa fa-plus-circle"></i> Add new</a>
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
									<th>Pregunta</th>
									<th>Rta. Precisa</th>
									<th>Rta. Larga</th>
									<th>Estado</th>
								</tr>
					        </thead>
					 
					        <tfoot>
					            <tr>
					                <th>#</th>
									<th>Acciones</th>
									<th>Pregunta</th>
									<th>Rta. Precisa</th>
									<th>Rta. Larga</th>
									<th>Estado</th>
					            </tr>
					        </tfoot>
					 
					        <tbody>
					            <?php
					            	foreach ($questions as $key => $question) { ?>
										<tr>
											<td style="text-align:center;"><?php echo $key+1; ?></td>
											<td style="width:120px;">
												<div class="btn-group btn-group-xs">
													<a href="<?php echo $this->createUrl('questions/update/'.$question->id_question); ?>" data-toggle="tooltip" title="Editar" class="btn btn-default"><i class="fa fa-edit"></i></a>
													<?php if($question->status == 1){ ?>
														<a href="<?php echo $this->createUrl('questions/status')."/".$question->id_question; ?>" data-toggle="tooltip" title="Ocultar" class="btn btn-default"><i class="fa fa-minus-circle"></i></a>
													<?php } else{ ?>
														<a href="<?php echo $this->createUrl('questions/status')."/".$question->id_question; ?>" data-toggle="tooltip" title="Mostrar" class="btn btn-default"><i class="fa fa-check"></i></a>
													<?php } ?>
													<a data-msj='¿Esta seguro de querer eliminar la pregunta? Despues no podra recuperarla, recuerde que otra opción es dejarla oculta.' href="<?php echo $this->createUrl('questions/delete_question')."/".$question->id_question; ?>" data-toggle="tooltip" title="Eliminar" class="js-confirm btn btn-default"><i class="fa fa-power-off"></i></a>
												</div>
											</td>
											<td><?php echo $question->question; ?></td>
											<td><?php echo $question->precise; ?></td>
											<td><?php echo $question->reply; ?></td>
											<td><span class="label label-<?php echo($question->status == 1)?"success":"warning" ?>"><?php echo ($question->status == 1)?'Activo':'Oculto'; ?></span></td>
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