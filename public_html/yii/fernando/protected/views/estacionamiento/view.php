<?php
/* @var $this EstacionamientoController */
/* @var $model Estacionamiento */

$this->breadcrumbs=array(
	'Estacionamientos'=>array('index'),
	$model->rut_estacionamiento,
);

$this->menu=array(
	array('label'=>'Listar Estacionamiento', 'url'=>array('index')),
	array('label'=>'Crear Estacionamiento', 'url'=>array('create')),
	array('label'=>'Actualizar Estacionamiento', 'url'=>array('update', 'id'=>$model->rut_estacionamiento)),
	array('label'=>'Eliminar Estacionamiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut_estacionamiento),'confirm'=>'¿Está seguro que desea eliminar esta información?')),
	array('label'=>'Administrar Estacionamiento', 'url'=>array('admin')),
);
?>

<h1>Estacionamiento #<?php echo $model->rut_estacionamiento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rut_estacionamiento',
		'nombre_estacionamiento',
		'representante_legal',
		'direccion',
		'plazas_disponibles',
	),
)); ?>
