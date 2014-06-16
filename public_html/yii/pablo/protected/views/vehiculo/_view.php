<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ingreso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->fecha_ingreso),array('view','id'=>$data->fecha_ingreso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut_estacionamiento')); ?>:</b>
	<?php echo CHtml::encode($data->rut_estacionamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>