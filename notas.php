<!DOCTYPE html>
<html lang="es">
    <head>
      <title>Razones Financieras | Notas</title>
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
		            <li class="active"><a href="notas.php">Notas</a></li>
		        </ul>
		    </div>
		</nav>

		<div class="container">
			<label>Nombre del curso:</label><span> Funfamentos de Programación Web</span><br><br><br>

			<label>Integrantes del grupo:</label>
			<ul type="circle">
				<li>Jonathan Marchena</li>
				<li>Fernanda León</li>
				<li>Carlos León</li>
				<li>Olman Arias</li>
			</ul><br><br>

			<label>Actividades realizadas por cada integrante:</label>            
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Función</th>
						<th>Descripción</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>Jonathan Marchena</td>
						<td>Programador</td>
						<td>Colaboró en el desarrollo de la aplicación</td>
					</tr>

					<tr>
						<td>Fernanda León</td>
						<td>Diseñadora</td>
						<td>Encargada de diseñar el sitio Web</td>
					</tr>

					<tr>
						<td>Carlos León</td>
						<td>Programador</td>
						<td>Colaboró en el desarrollo de la aplicación</td>
					</tr>

					<tr>
						<td>Olman Arias</td>
						<td>Diseñador</td>
						<td>Encargado de diseñar el sitio Web</td>
					</tr>
				</tbody>
			</table><br><br>

			<label>Recursos de Investigación utilizados</label><span> (tanto en investigación sobre tips de programación, así como para comprender la idea de las razones financieras).</span>
		</div>

      <?php include './inc/footer.php'; ?>
    </body>
</html>