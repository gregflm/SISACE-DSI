<?php
/* @var $this TarifaController */
/* @var $model Tarifa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rut_estacionamiento'); ?>
		<?php echo $form->textField($model,'rut_estacionamiento',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->label($model,'valor'); ?>
		<?php echo $form->textField($model,'valor'); ?>
	</div>-->

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
                              //'showAnim' => 'slideDown',
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
		<?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-primary')); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->