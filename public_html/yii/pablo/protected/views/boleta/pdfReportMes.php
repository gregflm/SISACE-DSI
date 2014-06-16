<?php $contador=count($model); if ($model !== null):?>
<html>
<head>
<style>
 body {font-family: sans-serif;
 font-size: 10pt;
 }
 p { margin: 0pt;
 }
 td { vertical-align: top; }
 .items td {
 border-left: 0.1mm solid #000000;
 border-right: 0.1mm solid #000000;
 }
 table thead td { background-color: #EEEEEE;
 text-align: center;
 border: 0.1mm solid #000000;
 }
 .items td.blanktotal {
 background-color: #FFFFFF;
 border: 0mm none #000000;
 border-top: 0.1mm solid #000000;
 }
 .items td.totals {
 text-align: right;
 border: 0.1mm solid #000000;
 }
</style>
</head>
<body>
 
<!--mpdf
 <htmlpageheader name="myheader">
 <table width="100%"><tr>
 <td width="50%" style="color:#0000BB;"><span style="font-weight: bold; font-size: 14pt;">SISACE</span><br />Sistema Automatizado de Control de Estacionamiento<br /><span style="font-size: 15pt;">&#9742;</span> XX-XXXXXXXXX</td>
 <td width="50%" style="text-align: right;"><b>Reporte <?php echo $año?>-<?php echo $mes?></b></td>
 </tr></table>
 </htmlpageheader>
 
<htmlpagefooter name="myfooter">
 <div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ">
 Página {PAGENO} de {nb}
 </div>
 </htmlpagefooter>
 
<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
 <sethtmlpagefooter name="myfooter" value="on" />
 mpdf-->
<div style="text-align: right"><b>Emitido el </b><?php echo date("d/m/Y"); ?> </div>
<b>Total Resultados:</b> <?php echo $contador; ?>
 <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="5">
 <thead>
 <tr>
 <td width="30%">Fecha de Emision</td>
 <td width="30%">Fecha de Ingreso</td>
 <td width="10%">Nº</td>
 <td width="30%">Total</td>
 </tr>
 </thead>
 <tbody>
 <!-- ITEMS -->
  <?php $suma_total;?>
 <?php foreach($model as $row): ?>
 <tr>
 <td align="center">
 <?php echo $row->fecha_emision; ?>
 </td>
 <td align="center">
 <?php echo $row->fecha_ingreso; ?>
 </td>
 <td align="center">
 <?php echo $row->num_boleta; ?>
 </td>
 <td align="center">
 <?php echo $row->valor_total; 
  $suma_total = $suma_total + $row->valor_total;
 ?>
 </td>
 </tr>
 <?php endforeach; ?>
 <!-- FIN ITEMS -->
 <tr>
 <td class="blanktotal" colspan="8" rowspan="8" align="right">
 Total del mes: $<?php echo $suma_total; ?></td>
 </tr>
 </tbody>
 </table>
 </body>
 </html>
<?php endif; ?>
