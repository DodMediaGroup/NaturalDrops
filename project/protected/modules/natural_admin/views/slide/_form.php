<div class="row">
	<div class="col-md-12">
		<div class="widget">
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