<?php
/* @var $this BoletaController */
/* @var $data Boleta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_emision')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->fecha_emision), array('view', 'id'=>$data->fecha_emision)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_boleta')); ?>:</b>
	<?php echo CHtml::encode($data->num_boleta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_total')); ?>:</b>
	<?php echo CHtml::encode($data->valor_total); ?>
	<br />


</div>