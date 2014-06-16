<?php
$this->breadcrumbs=array(
	'Vehiculos',
);

$this->menu=array(
	array('label'=>'Crear Vehiculo','url'=>array('create')),
	array('label'=>'Administrar Vehiculo','url'=>array('admin')),
);
?>

<h1>Vehiculos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
