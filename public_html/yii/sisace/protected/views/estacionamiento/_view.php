<?php
/* @var $this EstacionamientoController */
/* @var $data Estacionamiento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut_estacionamiento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rut_estacionamiento), array('view', 'id'=>$data->rut_estacionamiento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_estacionamiento')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_estacionamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('representante_legal')); ?>:</b>
	<?php echo CHtml::encode($data->representante_legal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plazas_disponibles')); ?>:</b>
	<?php echo CHtml::encode($data->plazas_disponibles); ?>
	<br />

<br><br>
</div>