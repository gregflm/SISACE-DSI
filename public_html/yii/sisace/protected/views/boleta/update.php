<?php
/* @var $this BoletaController */
/* @var $model Boleta */

$this->breadcrumbs=array(
	'Boletas'=>array('index'),
	$model->fecha_emision=>array('view','id'=>$model->fecha_emision),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Boleta', 'url'=>array('index')),
	array('label'=>'Crear Boleta', 'url'=>array('create')),
	array('label'=>'Ver Boleta', 'url'=>array('view', 'id'=>$model->fecha_emision)),
	array('label'=>'Administrar Boleta', 'url'=>array('admin')),
);
?>

<h1>Actualizar Boleta <!--<?php echo $model->fecha_emision; ?>--></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>