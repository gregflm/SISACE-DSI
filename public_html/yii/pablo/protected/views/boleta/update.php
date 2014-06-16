<?php
/* @var $this BoletaController */
/* @var $model Boleta */

$this->breadcrumbs=array(
	'Boletas'=>array('index'),
	$model->fecha_emision=>array('view','id'=>$model->fecha_emision),
	'Update',
);

$this->menu=array(
	array('label'=>'List Boleta', 'url'=>array('index')),
	array('label'=>'Create Boleta', 'url'=>array('create')),
	array('label'=>'View Boleta', 'url'=>array('view', 'id'=>$model->fecha_emision)),
	array('label'=>'Manage Boleta', 'url'=>array('admin')),
);
?>

<h1>Update Boleta <?php echo $model->fecha_emision; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>