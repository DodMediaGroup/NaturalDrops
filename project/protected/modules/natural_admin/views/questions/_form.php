<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'questions-form',
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
					<h2><strong>Pregunta</strong></h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="form-group">
						<?php echo $form->labelEx($model,'question'); ?>
        				<?php echo $form->textField($model,'question',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Pregunta','required'=>true)); ?>
					</div>
					<div class="form-group">
						<?php echo $form->labelEx($model,'precise'); ?>
        				<?php echo $form->textField($model,'precise',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Respuesta corta y precisa','required'=>true)); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="widget">
				<div class="widget-header transparent">
					<h2><strong>Respuesta</strong></h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="form-group">
						<?php echo $form->textArea($model,'reply', array('class'=>'form-control', 'rows'=>7)); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-success')); ?>
                <a href="<?php echo $this->createUrl('questions/admin'); ?>" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</div>
<?php $this->endWidget(); ?>