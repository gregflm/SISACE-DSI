<?php
/* @var $this TarifaController */
/* @var $model Tarifa */

$this->breadcrumbs=array(
	'Tarifas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Tarifa', 'url'=>array('index')),
	array('label'=>'Administrar Tarifa', 'url'=>array('admin')),
);
?>

<h1>Crear Tarifa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>