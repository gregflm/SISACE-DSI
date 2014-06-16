<?php
$conexion;
if (!($conexion = mysql_connect('localhost', 'grupo2', 'face2014'))) {
    echo "error";
    exit();
} else {
    $conexion = mysql_connect('localhost', 'grupo2', 'face2014');
    mysql_select_db("sisace", $conexion);
}



$consulta = mysql_query("SELECT plazas_disponibles FROM estacionamiento ");
             $datos1 = mysql_result($consulta, 0);

if($datos1<=0){
echo "<script languaje='javascript'>alert('No quedan cupos disponibles');location.href='./index.html';</script>";
} else{
echo "<script languaje='javascript'>location.href='./voucher.php';</script>";

}
       


?>