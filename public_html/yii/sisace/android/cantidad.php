<html>
<body bgcolor="#463A3A">

	<?php
	include ('conexion.php');
	$result=mysql_query("SELECT plazas_disponibles FROM estacionamiento LIMIT 1");
    if($row = mysql_fetch_array($result)){
      
    	$cantidad = $row['plazas_disponibles'];
    }
   else {
   	echo "error en la consulta";
   }
	?>
	<h1 style="color:#F0D567"><?php echo $cantidad;?></h1>
	</body>
</html>