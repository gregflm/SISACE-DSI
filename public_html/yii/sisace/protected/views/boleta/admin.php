<?php
/* @var $this BoletaController */
/* @var $model Boleta */

$this->breadcrumbs=array(
	'Boletas'=>array('index'),
	'Administrar',
);

$fecha= date('Y-m');

$this->menu=array(
//	array('label'=>'Lista de Boleta', 'url'=>array('index')),
//	array('label'=>'Reporte del día PDF','url'=>array('generarPdf')), 
//	array('label'=>'Reporte mensual PDF','url'=>array('mes'),'visible'=>'administrador'),

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

<h1>Administrar Boletas</h1>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
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


