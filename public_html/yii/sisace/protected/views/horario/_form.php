<?php
/* @var $this HorarioController */
/* @var $model Horario */
/* @var $form CActiveForm */
?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'horario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rut_estacionamiento'); ?>
		<?php $list = CHtml::listData(Estacionamiento::model()->findAll(array('order' => 'rut_estacionamiento')), 'rut_estacionamiento', 'nombre_estacionamiento');
        echo $form->dropDownList($model, 'rut_estacionamiento', $list);?>

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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

