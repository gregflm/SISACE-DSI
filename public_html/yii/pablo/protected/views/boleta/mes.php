<?php
$this->breadcrumbs=array(
	'Boletas'=>array('index'),
	'Formulario Informe',
);
?>

<div class="row-fluid">
	<div class="spam6">
		<h1>Elegir Año y Mes</hi>
		<?php $form=$this->beginWidget("CActiveForm");?>
		<?php echo $form->labelEx($fecha_mes,"anho");?>
		<?php echo $form->dropDownList($fecha_mes,"anho",array('2012'=>'2012','2013'=>'2013','2014'=>'2014'));?>
		<?php echo $form->error($fecha_mes,"anho");?>
		<?php echo $form->labelEx($fecha_mes,"mes");?>
		<?php echo $form->dropDownList($fecha_mes,"mes",array('01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06','07'=>'07','08'=>'08','09'=>'09','10'=>'10','11'=>'11','12'=>'Diciembre'));?>
		<?php echo $form->error($fecha_mes,"mes");?><br>
		<?php echo CHtml::submitButton("Generar",array("class"=>"btn btn-primary"));?>
		<?php $this->endWidget();?>
	</div>
</div>
