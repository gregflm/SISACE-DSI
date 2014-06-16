<?php
$this->breadcrumbs=array(
	'Boletas'=>array('index'),
	'Formulario Informe',
);
?>

<div class="form">

		
		<h1>Informe Mensual</h1>
		<h3>Elegir Año y Mes</h3>
		<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>
		<?php $form=$this->beginWidget("CActiveForm");?>
		<?php echo $form->labelEx($fecha_mes,"año");?>
		<?php echo $form->dropDownList($fecha_mes,"año",array('2014'=>'2014'));?>
		<?php echo $form->error($fecha_mes,"año");?>
		<?php echo $form->labelEx($fecha_mes,"mes");?>
		<?php echo $form->dropDownList($fecha_mes,"mes",array('04'=>'04','05'=>'05','06'=>'06'));?>
		<?php echo $form->error($fecha_mes,"mes");?><br>
		<?php echo CHtml::submitButton("Generar",array("class"=>"btn btn-primary"));?>
		<?php $this->endWidget();?>

</div>
