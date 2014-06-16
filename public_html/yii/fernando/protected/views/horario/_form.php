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
		
		<?php $this->widget('ext.timepicker.timepicker', array(
            'name'=>'hora_inicio',
            'model'=>$model,
            
            'options' => array(
            	'showOn'=>'focus',
                'timeFormat'=>'hh:mm:ss',
                'showSecond'=>true,
                'hourGrid'=>4,
                'minuteGrid'=>10,
                'language'=> 'es'
            ),
        ));?>


	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_termino'); ?>
		
		<?php $this->widget('ext.timepicker.timepicker', array(
            'name'=>'hora_termino',
            'model'=>$model,
            
            'options' => array(
            	'showOn'=>'focus',
                'timeFormat'=>'hh:mm:ss',
                'showSecond'=>true,
                'hourGrid'=>4,
                'minuteGrid'=>10,
                'language'=> 'es'
            ),
        ));?>

	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia'); ?>
		<?php echo $form->textField($model,'dia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->