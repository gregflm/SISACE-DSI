
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es" xml:lang="es">

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!--[if gt IE 8]><!--> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <!-- Remove this line if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="viewport" content="width=device-width">
    
    <meta name="description" content="Designa Studio, a HTML5 / CSS3 template.">
    <meta name="author" content="Sylvain Lafitte, Web Designer, sylvainlafitte.com">
    
    <link rel="stylesheet" type="text/css" href="/~grupo2/yii/sisace/themes/designa/css/jquery.css" />
<link rel="stylesheet" type="text/css" href="/~grupo2/yii/sisace/assets/8aa01c3/css/dropdown/dropdown.css" />
<link rel="stylesheet" type="text/css" href="/~grupo2/yii/sisace/assets/8aa01c3/css/dropdown/themes/default/default.css" />
<script type="text/javascript" src="/~grupo2/yii/sisace/assets/7954b3ad/jquery.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="/~grupo2/yii/sisace/themes/designa/js/jquery.gvChart-1.0.1.min.js"></script>
<script type="text/javascript" src="/~grupo2/yii/sisace/themes/designa/js/pbs.init.js"></script>
<title>SISACE</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/~grupo2/yii/sisace/themes/designa/css/style.css">
    
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<!-- Prompt IE 7 users to install Chrome Frame -->
<!--[if lt IE 8]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<div class="container">

    <header id="navtop">
        <a href="#" class="logo fleft">
            <img src="/~grupo2/yii/sisace/themes/designa/img/sisace1.png" >
        </a>
        
        <nav class="fright">
     <ul class="nav navbar-nav" id="yw0">
<li><a href="/~grupo2/yii/sisace/index.php?r=cruge/ui/logout">Logout (operador)</a></li>
</ul>       </nav>
    </header>


<div class="home-page main">
    <section class="grid-wrap" >
        <header class="grid col-full">
        <hr>
			<ul class="dropdown dropdown-horizontal" id="yw1">
<li class="first dir"><a>Cobro</a>
<ul>

<li class="last"><a href="/~grupo2/yii/sisace/index.php?r=fecha/index">Generar Boleta</a></li>
</ul>
</li>
<li class="last dir"><a>Informes</a>
<ul>
<li class="first last"><a href="/~grupo2/yii/sisace/index.php?r=boleta/generarpdf">Informe Diario</a></li>
</ul>
</li>
</ul>		


            <hr>


        <!--    <a href="#" class="arrow fright">see more infos</a> -->
        </header>
        
        <div class="grid col-two-half mq2-col-full">
            

<!--<h4><i> , a un paso de sus compras...</i></h4> -->
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
                         <img src="/~grupo2/yii/sisace/themes/designa/img/img22.jpg" alt="">
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
                             <img src="/~grupo2/yii/sisace/themes/designa/img/img33.jpg" alt="">
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

<?php   
  date_default_timezone_set("America/Santiago");



if(isset($_POST['fecha'])){
$fecha = date("Y-m-d G:i:s",strtotime($_POST['fecha']));
}







$date1 = strtotime($fecha);
$date2 = time();


$subTime = $date2-$date1;
$y = ($subTime/(60*60*24*365));
$d = ($subTime/(60*60*24))%365;
$h = ($subTime/(60*60))%24;
$m = ($subTime/60)%60;

echo "Diferencia entre ".$fecha." y ".date('Y-m-d H:i:s',$date2)." es:<br/>";
//echo $y." annos<br/>";
echo $d." dias<br/>";
echo $h." horas<br/>";
echo $m." minutos<br/>";

$cobro =0;

$fecha_em= date('Y-m-d H:i:s',$date2);

$h = $h + $m/60 +$d*24;
$cobro = $h*600;

if($cobro<0)
  $cobro = $cobro*-1;







if($h < 1)
{echo "Debe pagar el minimo: $600";
$cobro = 600;
}
else
echo "Debe pagar: $".$cobro;


$conexion = mysql_connect("localhost","grupo2","face2014");

mysql_select_db("sisace",$conexion); 

/*if ($conexion==0)
echo "Lo sentimos, no se ha podido conectar con la MySQL";
else {
echo "Se logró conectar con MySQL";
echo "<br>";}
*/

$actualizaEstado = "UPDATE vehiculo SET estado=0 WHERE fecha_ingreso = '$fecha'";
$sql="INSERT INTO boleta(fecha_emision,fecha_ingreso,valor_total) VALUES('$fecha_em','$fecha','$cobro')";

mysql_query($sql);
mysql_query($actualizaEstado);




 
?>
 
<form method="post" action="vuelto.php" target="_blank">
<br>
    <label for="submit"><strong>Ingresa la cantidad del pago (En pesos chilenos)</strong></label>

<input type="number" name="vuelto" min="<?php echo $cobro; ?>"><br>
<input type="hidden" name="cobro" value="<?php echo $cobro; ?>">
<input type="hidden" name="fecha" value="<?php echo $fecha_em; ?>">
<input type="hidden" name="fecha2" value="<?php echo $fecha; ?>">

<input type="submit" name="submit"  value="Comprobar Vuelto"><br>
 
</form>



        
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


  

    </div>
    
        
        
         </section>

    
    </div>



     <!--main-->

<div class="divide-top">
    <footer class="grid-wrap">
        <ul class="grid col-one-third social">
        <!--    <li><a href="#">RSS</a></li> -->
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
    
        </ul>
    
        <div class="up grid col-one-third ">
            <a href="#navtop" title="Go back up">&uarr;</a>
        </div>
        
        <nav class="grid col-one-third ">
                <ul id="yw2">
<li class="active"><a href="/~grupo2/yii/sisace/index.php?r=site/index">Inicio</a></li>
<li><a href="/~grupo2/yii/sisace/index.php?r=site/page&amp;view=about">Acerca de</a></li>
<li><a href="/~grupo2/yii/sisace/index.php?r=site/contact">Contacto</a></li>
<li><a href="/~grupo2/yii/sisace/index.php?r=site/logout">Cerrar Sesión (operador)</a></li>
</ul>       </nav>
    </footer>
</div>

</div>



<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID. -->
<script>
  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>