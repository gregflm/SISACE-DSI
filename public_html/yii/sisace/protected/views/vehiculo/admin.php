<?php
$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	'Administrar',
);

// Yii::app()->clientScript->registerScript('search', "
// $('.search-button').click(function(){
// 	$('.search-form').toggle();
// 	return false;
// });
// $('.search-form form').submit(function(){
// 	$.fn.yiiGridView.update('vehiculo-grid', {
// 		data: $(this).serialize()
// 	});
// 	return false;
// });
// ");
?>

<h1>Administrar Voucher</h1>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vehiculo-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'fecha_ingreso',
		'rut_estacionamiento',
	//	'estado',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>