<?php
$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	$model->fecha_ingreso,
);

$this->menu=array(
	array('label'=>'List Vehiculo','url'=>array('index')),
	array('label'=>'Create Vehiculo','url'=>array('create')),
	array('label'=>'Update Vehiculo','url'=>array('update','id'=>$model->fecha_ingreso)),
	array('label'=>'Delete Vehiculo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->fecha_ingreso),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vehiculo','url'=>array('admin')),
);
?>

<h1>View Vehiculo #<?php echo $model->fecha_ingreso; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'fecha_ingreso',
		'rut_estacionamiento',
		'estado',
	),
)); ?>
