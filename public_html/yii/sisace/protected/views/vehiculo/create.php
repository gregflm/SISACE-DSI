<?php
$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Vehiculo','url'=>array('index')),
	array('label'=>'Administrar Vehiculo','url'=>array('admin')),
);
?>

<h1>Crear Vehiculo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>