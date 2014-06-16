<?php
/* @var $this TarifaController */
/* @var $model Tarifa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tarifa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php   echo $form->errorSummary($model); ?>
           <br />
	<div class="row">
		<?php echo $form->labelEx($model,'nombre_estacionamiento'); ?>
		     <?php
            $list = CHtml::listData(Estacionamiento::model()->findAll(array('order' => 'rut_estacionamiento')), 'rut_estacionamiento', 'nombre_estacionamiento');
            echo $form->dropDownList($model, 'rut_estacionamiento', $list);
            ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>30,'maxlength'=>30)); ?>
		<?php // echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor'); ?>
		<?php //echo $form->error($model,'valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vigencia'); 
		
 
               $this->widget('zii.widgets.jui.CJuiDatePicker',
                array(
                'attribute'=>'vigencia',
                'model'=>$model,
'language' => 'es',
             'options' => array(
                              'mode'=>'focus',
                              'minDate'=>'0',
                              'dateFormat'=>'yy-mm-dd',
                              'showAnim' => 'slideDown',
                              'showOn' => 'both',
                              'language' => 'es'), 
                
            //    'options' => ['readonly' => true, 'mode'=>'focus','minDate'=>'0','dateFormat'=>'d MM, yy','showAnim' => 'slideDown'],

                'htmlOptions'=>array('size'=>30,'class'=>'date','readonly'=>true),
                    )
                    );
                    ?>
  		<?php // echo $form->error($model,'vigencia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->