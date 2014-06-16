<?php
/* @var $this EstacionamientoController */
/* @var $model Estacionamiento */

$this->breadcrumbs=array(
	'Estacionamientos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'Lista de Estacionamiento', 'url'=>array('index')),
	//array('label'=>'Crear Estacionamiento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#estacionamiento-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Estacionamientos</h1>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'estacionamiento-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'rut_estacionamiento',
		'nombre_estacionamiento',
		'representante_legal',
		'direccion',
		'plazas_disponibles',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
