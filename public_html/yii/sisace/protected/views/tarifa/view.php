<?php
/* @var $this TarifaController */
/* @var $model Tarifa */

$this->breadcrumbs=array(
	'Tarifas'=>array('index'),
	$model->id_tarifa,
);

$this->menu=array(
	array('label'=>'Lista de Tarifa', 'url'=>array('index')),
	array('label'=>'Crear Tarifa', 'url'=>array('create')),
	array('label'=>'Actualizar Tarifa', 'url'=>array('update', 'id'=>$model->id_tarifa)),
	array('label'=>'Eliminar Tarifa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tarifa),'confirm'=>'¿Está seguro que desea eliminar esta información?')),
	array('label'=>'Administrar Tarifa', 'url'=>array('admin')),
);
?>

<h1>Tarifa <!--#<?php echo $model->id_tarifa; ?>--></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_tarifa',
		'rut_estacionamiento',
		'descripcion',
		'valor',
		'vigencia',
	),
)); ?>
