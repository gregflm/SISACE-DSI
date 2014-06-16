<?php
/* @var $this BoletaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Boletas',
);

$this->menu=array(
	array('label'=>'Create Boleta', 'url'=>array('create')),
	array('label'=>'Administrar Boleta', 'url'=>array('admin')),
);
?>

<h1>Boletas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
