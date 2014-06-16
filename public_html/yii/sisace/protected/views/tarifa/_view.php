<?php
/* @var $this TarifaController */
/* @var $data Tarifa */
?>

<div class="view">

	<!--<b><?php //echo CHtml::encode($data->getAttributeLabel('id_tarifa')); ?>:</b>
	<?php //echo CHtml::link(CHtml::encode($data->id_tarifa), array('view', 'id'=>$data->id_tarifa)); ?>
	<br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut_estacionamiento')); ?>:</b>
	<?php echo CHtml::encode($data->rut_estacionamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vigencia')); ?>:</b>
	<?php echo CHtml::encode($data->vigencia); ?>
	<br />

<br><br>
</div>