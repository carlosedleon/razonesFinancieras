<!DOCTYPE html>
<html lang="es">
    <head>
      <title>Razones Financieras</title>
      <?php include './inc/link.php'; ?>
    </head>

        <style type="text/css">
    	.navbar-default {
		  background-color: #36497A;
		  border-color: #36497A;
		}
		.navbar-default .navbar-brand {
		  color: #ffffff;
		}
		.navbar-default .navbar-brand:hover,
		.navbar-default .navbar-brand:focus {
		  color: #23BE9E;
		}
		.navbar-default .navbar-nav > li > a {
		  color: #ffffff;
		}
		.navbar-default .navbar-nav > li > a:hover,
		.navbar-default .navbar-nav > li > a:focus {
		  color: #23BE9E;
		}
		.navbar-default .navbar-nav > .active > a,
		.navbar-default .navbar-nav > .active > a:hover,
		.navbar-default .navbar-nav > .active > a:focus {
		  color: #ffffff;
		  background-color: #192430;
		}
    	.divs{
    		border: 2px solid #36497A;
    		border-radius: 10px;
    		padding-bottom: 15px;
    	}
    </style>

    <body>
    	<nav class="navbar navbar-default">
		    <div class="container-fluid">
		        <div class="navbar-header">
		          <a class="navbar-brand" href="index.php">Razones Financieras</a>
		        </div>
		        <ul class="nav navbar-nav">
		            <li><a href="index.php">Periodos</a></li>
		            <li class="active"><a href="estados_financieros.php">Estados Financieros</a></li>
		            <li><a href="#">R de Liquidez</a></li>
		            <li><a href="#">R de Endeudamiento</a></li>
		            <li><a href="#">R de Rentabilidad</a></li>
		            <li><a href="#">R de Cobertura</a></li>
		            <li><a href="#">Indicacines y Recursos</a></li>
		        </ul>
		    </div>
		</nav>

		
		
    	<?php include './inc/footer.php'; ?>
    </body>
</html>