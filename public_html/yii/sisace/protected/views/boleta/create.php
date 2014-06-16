a<?php
/* @var $this BoletaController */
/* @var $model Boleta */

$this->breadcrumbs=array(
	'Boletas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Boleta', 'url'=>array('index')),
	array('label'=>'Administrar Boleta', 'url'=>array('admin')),
);
?>

<h1>Crear Boleta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>