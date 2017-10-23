<!DOCTYPE html>
<html lang="es">
    <head>
      <title>Razones Financieras</title>
      <?php include './inc/link.php'; ?>
    </head>

    <body>
    	<nav class="navbar navbar-default">
		    <div class="container-fluid">
		        <div class="navbar-header">
		          <a class="navbar-brand" href="index.php">Razones Financieras</a>
		        </div>
		        <ul class="nav navbar-nav">
		            <li class="active"><a href="index.php">Periodos</a></li>
		            <li><a href="estados_financieros.php">Estados Financieros</a></li>
		            <li><a href="#">R de Liquidez</a></li>
		            <li><a href="#">R de Endeudamiento</a></li>
		            <li><a href="#">R de Rentabilidad</a></li>
		            <li><a href="#">R de Cobertura</a></li>
		            <li><a href="#">Indicacines y Recursos</a></li>
		        </ul>
		    </div>
		</nav>

		<div class="container" style="border: 2px solid #36497A; border-radius: 10px; padding-bottom: 15px">
			<h3>Primer periodo</h3>
			<label>Inicio</label><br>
			<input type="date" name=""><br><br>
			<label>Fin</label><br>
			<input type="date" name=""><br><br>
			<span><input type="checkbox" id="cbox1" value="first_checkbox"> Ver primer periodo en resultados</span><br>
		</div><br>

		<div class="container" style="border: 2px solid #36497A; border-radius: 10px; padding-bottom: 15px">
			<h3>Segundo periodo</h3>
			<label>Inicio</label><br>
			<input type="date" name=""><br><br>
			<label>Fin</label><br>
			<input type="date" name=""><br><br>
			<span><input type="checkbox" id="cbox1" value="first_checkbox"> Ver primer periodo en resultados</span><br>
		</div>

      <?php include './inc/footer.php'; ?>
    </body>
</html>