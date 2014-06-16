<?php
/* @var $this TarifaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tarifas',
);

$this->menu=array(
	array('label'=>'Crear Tarifa', 'url'=>array('create')),
	array('label'=>'Administrar Tarifa', 'url'=>array('admin')),
);
?>

<h1>Tarifas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
