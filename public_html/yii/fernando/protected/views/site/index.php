<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php
        
$this->widget('bootstrap.widgets.TbCarousel', array(
'items' => array(
 array(
        'image' => 'images/img1.jpg',
        'label' => 'Bienvenidos',
        'caption' => 'Estacionamientos Anibal Pinto S.A. le da la más cálida bienvenida'),
    array(
        'image' => 'images/img2.jpg',
        'label' => 'Nuestro Recinto',
        'caption' => 'Contamos con un lugar apropiado, seugirda y techado, de tal forma que su vehículo no sea una preocupación para usted'),
    array(
        'image' => 'images/img3.jpg',
        'label' => 'Nuestro equipo',
        'caption' => 'El equipo de Estacionamiento Anibal Pinto S.A.'),
),
)); ?>

<h4><i><?php echo CHtml::encode(Yii::app()->name); ?> , a un paso de sus compras...</i></h4>

<hr />
<div class="container" >
<div class="span3">
    <a href="#" class="thumbnail" rel="tooltip" data-title="Facebook">
    <br><br>    <h4 align="center">Facebook Pluggin:</h4> <br><br><br>
    </a>
</div>
 <div class="span3">
    <a href="#" class="thumbnail" rel="tooltip" data-title="Disponibles">
        <h4 align="center">Cantidad de Estacionamientos disponibles:</h4>
<?php foreach ($model as $data ): ?>
	<h2 align="center"><?php echo $data->plazas_disponibles;?></h2>
	<?php endforeach; ?>
    </a>
</div>
        <div class="span3">
    <a href="#" class="thumbnail" rel="tooltip" data-title="Twitter">
         <br><br>    <h4 align="center">Twitter Pluggin:</h4> <br><br><br>
    </a>
</div>
      <br/><br/>   
</div>