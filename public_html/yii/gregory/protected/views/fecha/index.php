<?php $var=array();
	
?>
<?php foreach ($model as $data): ?>
	<h1> <?php $var[]= $data->fecha_ingreso;

	?></h1>
	<?php endforeach?>

      <form action="view_boleta.php" method="POST" class="form-horizontal" role="form">



<label for="fecha"><strong>Selecciona fecha de ingreso:</strong></label><br>
  <select name="fecha" class="form-control">
    <option value = "<?php echo $var[0]; ?>" >    <?php echo $var[0];?>  </option>
    <option value = "<?php echo $var[1]; ?>" >    <?php echo $var[1];?>  </option>
    <option value = "<?php echo $var[2]; ?>" >    <?php echo $var[2];?>  </option>

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




          


