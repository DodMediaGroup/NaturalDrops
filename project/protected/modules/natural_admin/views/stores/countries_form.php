<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'countries-form',
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
		<div class="col-sm-6">
			<div class="widget">
				<div class="widget-header transparent">
					<h2><strong>Pais</strong></h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="form-group">
						<?php echo $form->labelEx($model,'name'); ?>
        				<?php echo $form->textField($model,'name',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Nombre','required'=>true)); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-success')); ?>
                <a href="<?php echo $this->createUrl('stores/countries_admin'); ?>" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</div>
<?php $this->endWidget(); ?>