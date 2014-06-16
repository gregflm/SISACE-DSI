<?php
/* @var $this EstacionamientoController */
/* @var $model Estacionamiento */

$this->breadcrumbs=array(
	'Estacionamientos'=>array('index'),
	$model->rut_estacionamiento=>array('view','id'=>$model->rut_estacionamiento),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Estacionamiento', 'url'=>array('index')),
	array('label'=>'Crear Estacionamiento', 'url'=>array('create')),
	array('label'=>'Ver Estacionamiento', 'url'=>array('view', 'id'=>$model->rut_estacionamiento)),
	array('label'=>'Administrar Estacionamiento', 'url'=>array('admin')),
);
?>

<h1>Actualizar Estacionamiento <?php echo $model->rut_estacionamiento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<br />