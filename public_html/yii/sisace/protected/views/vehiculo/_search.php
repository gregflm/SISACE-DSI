<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'fecha_ingreso'); ?>
<!-- 		<?php echo $form->textField($model,'fecha_ingreso',array('size'=>15,'maxlength'=>15)); ?> -->
	</div>

	<div class="row">
		<?php echo $form->label($model,'rut_estacionamiento'); ?>
<!-- 		<?php echo $form->textField($model,'rut_estacionamiento',array('size'=>15,'maxlength'=>15)); ?> -->
	</div>

<!-- 	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>15,'maxlength'=>1)); ?>
	</div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
