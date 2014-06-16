<?php
/* @var $this TarifaController */
/* @var $model Tarifa */

$this->breadcrumbs=array(
	'Tarifas'=>array('index'),
	$model->id_tarifa=>array('view','id'=>$model->id_tarifa),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Tarifa', 'url'=>array('index')),
	array('label'=>'Crear Tarifa', 'url'=>array('create')),
	array('label'=>'Ver Tarifa', 'url'=>array('view', 'id'=>$model->id_tarifa)),
	array('label'=>'Administrar Tarifa', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tarifa <?php echo $model->id_tarifa; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>