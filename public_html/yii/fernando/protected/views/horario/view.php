<?php
/* @var $this HorarioController */
/* @var $model Horario */

$this->breadcrumbs=array(
	'Horarios'=>array('index'),
	$model->id_horario,
);

$this->menu=array(
	array('label'=>'Listar Horario', 'url'=>array('index')),
	array('label'=>'Crear Horario', 'url'=>array('create')),
	array('label'=>'Actualizar Horario', 'url'=>array('update', 'id'=>$model->id_horario)),
	array('label'=>'Eliminar Horario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_horario),'confirm'=>'¿Está seguro que desea eliminar esta información?')),
	array('label'=>'Administrar Horario', 'url'=>array('admin')),
);
?>

<h1>Horario #<?php echo $model->id_horario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_horario',
		'rut_estacionamiento',
		'hora_inicio',
		'hora_termino',
		'dia',
	),
)); ?>
