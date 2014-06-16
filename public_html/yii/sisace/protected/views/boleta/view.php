<?php
/* @var $this BoletaController */
/* @var $model Boleta */

$this->breadcrumbs=array(
	'Boletas'=>array('index'),
	$model->fecha_emision,
);

$this->menu=array(
	array('label'=>'Lista de Boleta', 'url'=>array('index')),
	array('label'=>'Crear Boleta', 'url'=>array('create')),
	array('label'=>'Actualizar Boleta', 'url'=>array('update', 'id'=>$model->fecha_emision)),
	array('label'=>'Eliminar Boleta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->fecha_emision),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Boleta', 'url'=>array('admin')),
);
?>

<h1>Boleta #<?php echo $model->fecha_emision; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fecha_emision',
		'fecha_ingreso',
		'num_boleta',
		'valor_total',
	),
)); ?>
