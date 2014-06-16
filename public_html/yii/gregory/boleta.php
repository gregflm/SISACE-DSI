<?php
// Disponible desde PHP 4.1.0

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



 
if(isset($_POST['submit']))
 
{
 
$vuelto = $_POST['vuelto'];
 
$vuelto = $vuelto -$cobro;

echo "Su vuelto es el siguiente:";
echo $vuelto;
 
}
 
?>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 
<input type="number" name="vuelto"><br>
 
<input type="submit" name="submit" value="Submit Form"><br>
 
</form>


?>
