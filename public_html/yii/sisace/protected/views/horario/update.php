<?php
/* @var $this HorarioController */
/* @var $model Horario */

$this->breadcrumbs=array(
	'Horarios'=>array('index'),
	$model->id_horario=>array('view','id'=>$model->id_horario),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'Lista de Horario', 'url'=>array('index')),
	//array('label'=>'Crear Horario', 'url'=>array('create')),
	//array('label'=>'Ver Horario', 'url'=>array('view', 'id'=>$model->id_horario)),
	//array('label'=>'Administrar Horario', 'url'=>array('admin')),
);
?>

<h1>Actualizar Horario <!--<?php echo $model->id_horario; ?>--></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>