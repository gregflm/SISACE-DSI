<?php
$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	$model->fecha_ingreso=>array('view','id'=>$model->fecha_ingreso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vehiculo','url'=>array('index')),
	array('label'=>'Create Vehiculo','url'=>array('create')),
	array('label'=>'View Vehiculo','url'=>array('view','id'=>$model->fecha_ingreso)),
	array('label'=>'Manage Vehiculo','url'=>array('admin')),
);
?>

<h1>Update Vehiculo <?php echo $model->fecha_ingreso; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>