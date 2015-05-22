<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-header transparent">
				<h2><strong>Agregar imagenes slide</strong></h2>
				<div class="additional-btn">
					<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
				</div>
			</div>
			<div class="widget-content padding">
				<div class="row">
					<div class="col-xs-12">
						<?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'images-form',
                            'action'=> $this->createUrl('slide/uploadImages/'.$model->id_slide),
                            'enableAjaxValidation'=>false,
                            'htmlOptions'=>array(
                                'class'=>'dropzone',
                                'enctype'=>"multipart/form-data",
                            )
                        )); ?>
							
                        <?php $this->endWidget(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'blogEntries-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array(
        'role'=>'form',
        'enctype'=>"multipart/form-data",
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
					<h2><strong>Slide</strong></h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="form-group">
						<?php echo $form->labelEx($model,'link'); ?>
        				<?php echo $form->textField($model,'link',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Link')); ?>
					</div>
					<div class="form-group">
						<?php echo $form->labelEx($model,'language'); ?>
        				<?php echo $form->dropDownList($model,'language', MyMethods::getListSelect('Languages', 'id_language', 'name'), array('class'=>'form-control')); ?>
					</div>
					<div class="form-group">
						<div class="imag-before-upload" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/slide/2-beneficios.jpg); max-width: 180px;">
							<?php if(!$model->isNewRecord && $model->background != ""){ ?>
								<div class="img" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/slide/<?php echo $model->background; ?>)"></div>
							<?php } ?>
						</div>
						<input type="file" accept="image/*" class="btn btn-default js-show-before" name="image" data-before=".imag-before-upload" title="<?php echo ($model->isNewRecord)?'Agregar Imagen':'Cambiar Imagen' ?>">
						<p class="help-block"><strong>Nota: </strong> Dimensiones recomendadas de 1400x800. Peso maximo 800Kb.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-success')); ?>
                <a href="<?php echo $this->createUrl('slide/admin'); ?>" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</div>
<?php $this->endWidget(); ?>