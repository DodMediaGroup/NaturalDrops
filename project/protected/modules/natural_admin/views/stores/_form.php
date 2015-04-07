<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'stores-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array(
        'role'=>'form',
    )
)); ?>
	<div class="row">
		<?php if($form->errorSummary($model) != ""){ ?>
			<div class="col-sm-12">
	            <div class="alert alert-danger">
	                <?php echo $form->errorSummary($model); ?>
	            </div>
	        </div>
        <?php } ?>
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
								<?php echo $form->labelEx($model,'name'); ?>
		        				<?php echo $form->textField($model,'name',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Nombre','required'=>true)); ?>
							</div>
							<div class="form-group">
								<?php echo $form->labelEx($model,'phone'); ?>
		        				<?php echo $form->textField($model,'phone',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Teléfono')); ?>
							</div>
							<div class="form-group">
								<?php echo $form->labelEx($model,'email'); ?>
		        				<?php echo $form->textField($model,'email',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Correo electrónico')); ?>
							</div>
							<div class="form-group">
								<?php echo $form->labelEx($model,'website'); ?>
		        				<?php echo $form->urlField($model,'website',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Página web')); ?>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<?php echo $form->labelEx($model,'city'); ?>
		        				<?php echo $form->dropDownList($model,'city', MyMethods::getListSelect('Cities', 'id_city', 'name'), array('class'=>'form-control','required'=>true)); ?>
							</div>
							<div class="form-group">
								<?php echo $form->labelEx($model,'locality'); ?>
		        				<?php echo $form->textField($model,'locality',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Barrio/Localidad')); ?>
							</div>
							<div class="form-group">
								<?php echo $form->labelEx($model,'address'); ?>
		        				<?php echo $form->textField($model,'address',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Dirección')); ?>
							</div>
							<div class="form-group">
								<?php echo $form->labelEx($model,'attention'); ?>
		        				<?php echo $form->textField($model,'attention',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Horario de atención')); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="widget">
				<div class="widget-header transparent">
					<h2><strong>Tienda</strong></h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="alert alert-info">
	                    Con un click, marca en el mapa la posición de la tienda.
	                </div>
					<div class="row">
						<div class="col-xs-6">
							<div class="form-group">
								<?php echo $form->labelEx($model,'lat'); ?>
		        				<?php echo $form->textField($model,'lat',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Latitud','readonly'=>true,'required'=>true)); ?>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<?php echo $form->labelEx($model,'lng'); ?>
		        				<?php echo $form->textField($model,'lng',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Longitud','readonly'=>true,'required'=>true)); ?>
							</div>
						</div>
						<div class="col-xs-12">
							<div id="gmap" style="height:400px"></div>
							<?php if(!$model->isNewRecord){ ?>
								<script>
									markers.push({
										lat: <?php echo $model->lat; ?>,
										lng: <?php echo $model->lng; ?>
									});
								</script>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-success')); ?>
                <a href="<?php echo $this->createUrl('stores/admin'); ?>" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</div>
<?php $this->endWidget(); ?>