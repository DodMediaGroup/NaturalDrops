<div class="page-heading">
    <h1>Editar <?php echo $model->name ?></h1>
</div>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'variables-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array(
        'role'=>'form',
        'class'=>'form-horizontal'
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
	    <dic class="col-sm-12">
		    <div class="widget">
				<div class="widget-header transparent">
					<h2><strong>Form</strong> Variable</h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="form-group">
						<?php echo $form->labelEx($model,'value', array('class'=>'col-sm-2 control-label')); ?>
						<div class="col-sm-10">
							<?php echo $form->textField($model,'value',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Nombre', 'required'=>true)); ?>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-success')); ?>
			                <a href="<?php echo $this->createUrl('variables/admin'); ?>" class="btn btn-danger">Cancelar</a>
						</div>
					</div>
				</div>
			</div>
	    </dic>
	</div>
	
<?php $this->endWidget(); ?>