<?php
/* @var $this EstacionamientoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estacionamientos',
);

$this->menu=array(
	//array('label'=>'Crear Estacionamiento', 'url'=>array('create')),
	//array('label'=>'Administrar Estacionamiento', 'url'=>array('admin')),
);
?>

<h1>Estacionamientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
