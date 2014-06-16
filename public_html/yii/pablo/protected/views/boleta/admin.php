<?php
/* @var $this BoletaController */
/* @var $model Boleta */

$this->breadcrumbs=array(
	'Boletas'=>array('index'),
	'Manage',
);

$fecha= date('Y-m');

$this->menu=array(
	array('label'=>'List Boleta', 'url'=>array('index')),
	array('label'=>'Create Boleta', 'url'=>array('create')),
	array('label'=>'Reporte del día PDF','url'=>array('generarPdf')),
	array('label'=>'Reporte mensual PDF','url'=>array('mes')),

);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#boleta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Boletas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'boleta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'fecha_emision',
		'fecha_ingreso',
		'num_boleta',
		'valor_total',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<?php

?>


