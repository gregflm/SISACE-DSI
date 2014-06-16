<?php
/* @var $this EstacionamientoController */
/* @var $model Estacionamiento */

$this->breadcrumbs=array(
	'Estacionamientos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Estacionamiento', 'url'=>array('index')),
	array('label'=>'Administrar Estacionamiento', 'url'=>array('admin')),
);
?>

<h1>Crear Estacionamiento</h1>
<br />
<?php $this->renderPartial('_form', array('model'=>$model)); ?>