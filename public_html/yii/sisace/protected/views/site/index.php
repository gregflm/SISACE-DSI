<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php
        /*
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
)); */?>

<!--<h4><i><?php // echo CHtml::encode(Yii::app()->name); ?> , a un paso de sus compras...</i></h4> -->
<!--

<div class="container" >



<div class="span3">
    <a href="#" class="thumbnail" rel="tooltip" data-title="Facebook">
    <br><br>    <h4 align="center">Facebook Pluggin:</h4> <br><br><br>
    </a>
</div> -->




 <div class="slider grid col-one-half mq2-col-full">
           <div class="flexslider">
             <div class="slides">
               <div class="slide">
                    <figure>
                         <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/img22.jpg" alt="">
                         <figcaption>
                            <div>
                            <h5>Bienvenidos a SISACE</h5>
                            <p>Sistema Automatizado de Control de Estacionamiento <!-- <a href="#">link text</a>--></p>
                            </div>
                         </figcaption>
                        </figure>
                   </div>
                   
                   <div class="slide">
                        <figure>
                             <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/img33.jpg" alt="">
                             <figcaption>
                                <div>
                                <h5>Siempre cerca de usted</h5>
                                <p>Brindamos soluciones eficientes y eficaces para ser de tu estadía, LA MEJOR!</p>
                                </div>
                             </figcaption>
                            </figure>
                       </div>
                    </div>
           </div>



</div>

<div class="slider grid col-one-half mq2-col-full">
<div id="round">
        <h4 align="center">Cantidad de Estacionamientos disponibles:</h4>
<?php foreach ($model as $data ): ?>
    <h2 align="center"><?php echo $data->plazas_disponibles;?></h2>
    <?php endforeach; ?>
    </a>
    </div>
        </div>

        
<style  type="text/css">
#round
{
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 70px;
    width:auto;
    height:auto;
    -webkit-border-radius: 57px;
    -moz-border-radius: 57px;
    border-radius: 57px;
    border:4px solid #BFDFFF;
    background-color:#8DDAE3;
    -webkit-box-shadow: #30AFB3 1px 1px 1px;
    -moz-box-shadow: #30AFB3 1px 1px 1px; 
    box-shadow: #30AFB3 1px 1px 1px;
}


</style>
<style  type="text/css">
#espacio{
    display: block;
    overflow: inherit;
    margin-top: 30px;
    padding-top: 50px;
    margin-bottom: 50px;

}
</style>


<div id="espacio">
 <div class="slider grid col-two-half mq2-col-full">

<div class="slider grid col-one-half mq2-col-full">
<div class="twitterapi">
<a class="twitter-timeline" href="https://twitter.com/estacionapinto" data-widget-id="455575114357030913"></a>
</div>
</div>
<div class="slider grid col-one-half mq2-col-full">
<div class="facebookapi">
<div class="fb-like-box" data-href="https://www.facebook.com/estacionamientoapinto" data-width="350" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
</div>

</div>

</div>

</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=496231230403866";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>