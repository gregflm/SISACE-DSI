<?php
/* @var $this HorarioController */
/* @var $data Horario */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_horario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_horario), array('view', 'id'=>$data->id_horario)); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut_estacionamiento')); ?>:</b>
	<?php echo CHtml::encode($data->rut_estacionamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->hora_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_termino')); ?>:</b>
	<?php echo CHtml::encode($data->hora_termino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia')); ?>:</b>
	<?php echo CHtml::encode($data->dia); ?>
	<br />


</div>