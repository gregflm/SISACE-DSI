<?php $form=$this->beginWidget('CActiveForm',array(
	'id'=>'vehiculo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textField($model,'fecha_ingreso',array('class'=>'span5')); ?>

	<?php echo $form->textField($model,'rut_estacionamiento',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textField($model,'estado',array('class'=>'span5','maxlength'=>1)); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>
