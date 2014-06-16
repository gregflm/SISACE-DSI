<?php
/* @var $this HorarioController */
/* @var $model Horario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rut_estacionamiento'); ?>
		<?php echo $form->textField($model,'rut_estacionamiento',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_inicio'); ?>
		
		<?php $this->widget('application.extensions.timepicker.EJuiDateTimePicker',array(
        		'model'=>$model,
        		'attribute'=>'hora_inicio',
        		'language'=> 'es',
        		'options'=>array(
	      		'timeOnly'=> true,
        		'hourGrid' => 4,
        		'minuteGrid'=>10,
        		'showSecond'=>false,
        		'minDate'=>'0',
        		'timeFormat'=>'hh:mm:ss',
        		'changeYear' => false,),
        		'htmlOptions'=>array('size'=>30,'class'=>'time','readonly'=>true),));?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_termino'); ?>
		
		<?php $this->widget('application.extensions.timepicker.EJuiDateTimePicker',array(
        		'model'=>$model,
        		'attribute'=>'hora_termino',
        		'language'=> 'es',
        		'options'=>array(
	      		'timeOnly'=> true,
        		'hourGrid' => 4,
        		'minuteGrid'=>10,
        		'showSecond'=>false,
        		'minDate'=>'0',
        		'timeFormat'=>'hh:mm:ss',
        		'changeYear' => false,),
        		'htmlOptions'=>array('size'=>30,'class'=>'time','readonly'=>true),));?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'dia_desde'); ?>
		<?php echo $form->dropDownList($model, 'dia_desde', array('Lunes'=>'Lunes', 'Martes'=>'Martes', 'Miércoles'=>'Miércoles',
		'Jueves'=>'Jueves','Viernes'=>'Viernes','Sábado'=>'Sábado','Domingo'=>'Domingo')); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'dia_hasta'); ?>
		<?php echo $form->dropDownList($model, 'dia_hasta', array('Lunes'=>'Lunes', 'Martes'=>'Martes', 'Miércoles'=>'Miércoles',
		'Jueves'=>'Jueves','Viernes'=>'Viernes','Sábado'=>'Sábado','Domingo'=>'Domingo')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->