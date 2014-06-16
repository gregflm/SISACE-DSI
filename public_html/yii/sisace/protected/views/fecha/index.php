<?php $var=array();
$varEstado=array();
	
?>
<?php foreach ($model as $data): ?>
	<h1> <?php $var[]= $data->fecha_ingreso;
                $varEstado[] = $data->estado;
	?></h1>
	<?php endforeach?>

      <form action="view_boleta.php" method="POST" class="form-horizontal" role="form">



<label for="fecha"><strong>Selecciona fecha de ingreso: </strong></label><br>
  <select name="fecha" class="form-control">
      <?php for ($index = 0 ; $index < count($var); $index++) {
          if($varEstado[$index]==1) {    
          ?>
    <option value = "<?php echo $var[$index]; ?>" >    <?php echo $var[$index];?>  </option>

          <?php }}?>
  </select> 

  <br><br>




 <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary">Calcular</button>
              </div>
            </div>
          </div>

         </form>




          



          


