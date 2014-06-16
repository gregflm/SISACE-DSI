<?php
/* @var $this BoletaController */
/* @var $model Boleta */

$this->breadcrumbs=array(
	'Boletas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Boleta', 'url'=>array('index')),
	array('label'=>'Manage Boleta', 'url'=>array('admin')),
);
?>

<h1>Create Boleta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>