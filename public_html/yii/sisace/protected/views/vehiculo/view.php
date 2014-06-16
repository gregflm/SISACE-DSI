<?php
$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	$model->fecha_ingreso,
);

$this->menu=array(
	//array('label'=>'Lista Vehiculo','url'=>array('index')),
	//array('label'=>'Crear Vehiculo','url'=>array('create')),
	//array('label'=>'Actualizar Vehiculo','url'=>array('update','id'=>$model->fecha_ingreso)),
	//array('label'=>'Eliminar Vehiculo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->fecha_ingreso),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Administrar Vehiculo','url'=>array('admin')),
);
?>

<h1>Vehiculo #<?php echo $model->fecha_ingreso; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fecha_ingreso',
		'rut_estacionamiento',
		'estado',
	),
)); ?>
