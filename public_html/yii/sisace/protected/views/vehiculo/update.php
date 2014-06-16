<?php
$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	$model->fecha_ingreso=>array('view','id'=>$model->fecha_ingreso),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'Lista de Vehiculo','url'=>array('index')),
	//array('label'=>'Crear Vehiculo','url'=>array('create')),
	//array('label'=>'Ver Vehiculo','url'=>array('view','id'=>$model->fecha_ingreso)),
	//array('label'=>'Administrar Vehiculo','url'=>array('admin')),
);
?>

<h1>Actualizar Vehiculo <!--<?php echo $model->fecha_ingreso; ?>--></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>