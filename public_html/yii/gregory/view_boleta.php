
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
            
        
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="/~grupo2/yii/gregory/assets/7d883f12/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/~grupo2/yii/gregory/assets/7d883f12/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="/~grupo2/yii/gregory/assets/7d883f12/css/yii.css" />
<script type="text/javascript" src="/~grupo2/yii/gregory/assets/7954b3ad/jquery.js"></script>
<script type="text/javascript" src="/~grupo2/yii/gregory/assets/7d883f12/js/bootstrap.js"></script>
<title>Estacionamientos A. Pinto - Hola</title>
</head>

<body>



	<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="/~grupo2/yii/gregory/index.php">
                      Estacionamientos A. Pinto                                       
                    </a>
                    <div class="nav-collapse collapse">
		<ul class="nav navbar-nav" id="yw0">
<li><a href="/~grupo2/yii/gregory/index.php?r=site/index">Inicio</a></li>
<li><a href="/~grupo2/yii/gregory/index.php?r=site/page&amp;view=about">Acerca de</a></li>
<li><a href="/~grupo2/yii/gregory/index.php?r=site/contact">Contacto</a></li>
<li><a href="/~grupo2/yii/gregory/index.php?r=site/login">Login</a></li>
</ul>                    </div>
                </div>
            </div>
	</div><!-- mainmenu -->
        
        <div class="container">
            <div class="page-header">
                <br /> <br />
			<!-- breadcrumbs -->
	            </div>
	<div id="content">
		<h1> </h1>
		<h1> </h1>
		<h1> </h1>


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
echo "Debe pagar el minimo: $600";
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


$sql="INSERT INTO boleta(fecha_emision,fecha_ingreso,num_boleta,valor_total) VALUES('$fecha_em','$fecha','1','$cobro')";

mysql_query($sql);




 
?>
 
<form method="post" action="vuelto.php">
<br>
    <label for="submit"><strong>Ingresa la cantidad del pago</strong></label>

<input type="number" name="vuelto"><br>
<input type="hidden" name="cobro" value="<?php echo $cobro; ?>">

<input type="submit" name="submit" value="Comprobar Vuelto"><br>
 
</form>




          


</div><!-- content -->

               <br />  <br />
	<div class="footer text-center">
		Copyright &copy; 2014 por SISACE.<br/>
		Todos los derechos Reservados.<br/>
		
	</div><!-- footer -->

        </div>

<script type="text/javascript">
/*<![CDATA[*/
jQuery(function($) {
jQuery('body').tooltip({'selector':'a[rel=tooltip]'});
jQuery('body').popover({'selector':'a[rel=popover]'});
});
/*]]>*/
</script>
</body>
</html>