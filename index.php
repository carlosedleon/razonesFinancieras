<!DOCTYPE html>
<html lang="es">
    <head>
      <title>Razones Financieras</title>
      <?php include './inc/link.php'; ?>
    </head>

    <style type="text/css">
    	.navbar-default {
		  background-color: #383949;
		  border-color: #383949;
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

    <script type="text/javascript">
    	function mostrar(sel) {
    		if (sel.value=="vacio"){

	           	div_Financieros = document.getElementById("div_Financieros");
	           	div_Financieros.style.display = "none";

	           	div_Liquidez = document.getElementById("div_Liquidez");
	           	div_Liquidez.style.display = "none";

	           	div_Endeudamiento = document.getElementById("div_Endeudamiento");
	           	div_Endeudamiento.style.display = "none";

	           	div_Rantabilidad = document.getElementById("div_Rantabilidad");
	           	div_Rantabilidad.style.display = "none";

	           	div_Cobertura = document.getElementById("div_Cobertura");
	           	div_Cobertura.style.display = "none";

	      	}else if (sel.value=="estados_financieros"){

	           	div_Financieros = document.getElementById("div_Financieros");
	           	div_Financieros.style.display = "";

	           	div_Liquidez = document.getElementById("div_Liquidez");
	           	div_Liquidez.style.display = "none";

	           	div_Endeudamiento = document.getElementById("div_Endeudamiento");
	           	div_Endeudamiento.style.display = "none";

	           	div_Rantabilidad = document.getElementById("div_Rantabilidad");
	           	div_Rantabilidad.style.display = "none";

	           	div_Cobertura = document.getElementById("div_Cobertura");
	           	div_Cobertura.style.display = "none";

	      	}else if(sel.value=="razon_liquidez"){

	           	div_Financieros = document.getElementById("div_Financieros");
	           	div_Financieros.style.display="none";

	           	div_Liquidez = document.getElementById("div_Liquidez");
	           	div_Liquidez.style.display = "";

	           	div_Endeudamiento = document.getElementById("div_Endeudamiento");
	           	div_Endeudamiento.style.display = "none";

	           	div_Rantabilidad = document.getElementById("div_Rantabilidad");
	           	div_Rantabilidad.style.display = "none";

	           	div_Cobertura = document.getElementById("div_Cobertura");
	           	div_Cobertura.style.display = "none";

	      	}else if(sel.value=="razon_endeudamiento"){

	        	div_Financieros = document.getElementById("div_Financieros");
	           	div_Financieros.style.display="none";

	           	div_Liquidez = document.getElementById("div_Liquidez");
	           	div_Liquidez.style.display = "none";

	          	div_Endeudamiento = document.getElementById("div_Endeudamiento");
	           	div_Endeudamiento.style.display = "";

	           	div_Rantabilidad = document.getElementById("div_Rantabilidad");
	           	div_Rantabilidad.style.display = "none";

	           	div_Cobertura = document.getElementById("div_Cobertura");
	           	div_Cobertura.style.display = "none";

	    	}else if(sel.value=="razon_rentabilidad"){

	        	div_Financieros = document.getElementById("div_Financieros");
	           	div_Financieros.style.display="none";

	           	div_Liquidez = document.getElementById("div_Liquidez");
	           	div_Liquidez.style.display = "none";

	          	div_Endeudamiento = document.getElementById("div_Endeudamiento");
	           	div_Endeudamiento.style.display = "none";

	           	div_Rantabilidad = document.getElementById("div_Rantabilidad");
	           	div_Rantabilidad.style.display = "";

	           	div_Cobertura = document.getElementById("div_Cobertura");
	           	div_Cobertura.style.display = "none";

	    	}else if(sel.value=="razon_cobertura"){

	        	div_Financieros = document.getElementById("div_Financieros");
	           	div_Financieros.style.display="none";

	           	div_Liquidez = document.getElementById("div_Liquidez");
	           	div_Liquidez.style.display = "none";

	          	div_Endeudamiento = document.getElementById("div_Endeudamiento");
	           	div_Endeudamiento.style.display = "none";

	           	div_Rantabilidad = document.getElementById("div_Rantabilidad");
	           	div_Rantabilidad.style.display = "none";

	           	div_Cobertura = document.getElementById("div_Cobertura");
	           	div_Cobertura.style.display = "";
	    	}
		}
    </script>

    <body>
    	<nav class="navbar navbar-default">
		    <div class="container-fluid">
		        <div class="navbar-header">
		          <a class="navbar-brand" href="index.php">Razones Financieras</a>
		        </div>
		        <ul class="nav navbar-nav">
		            <li class="active"><a href="index.php">Periodos</a></li>
		            <li><a href="notas.php">Notas</a></li>
		        </ul>
		    </div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h3>Primer periodo</h3>
					<label>Inicio</label><br>
					<input type="date" name=""><br><br>
					<label>Fin</label><br>
					<input type="date" name=""><br><br>
					<span><input type="checkbox" id="cbox1" value="first_checkbox"> Ver primer periodo en resultados</span><br><br>
				</div>

				<div class="col-sm-4">
					<h3>Segundo periodo</h3>
					<label>Inicio</label><br>
					<input type="date" name=""><br><br>
					<label>Fin</label><br>
					<input type="date" name=""><br><br>
					<span><input type="checkbox" id="cbox1" value="second_checkbox"> Ver primer periodo en resultados</span><br><br>
				</div>

				<div class="col-sm-4">
					<h3>Funciones</h3>
					<!--*** SELECCIONAMOS LA SECCION A EDITAR ***-->
		      		<select id="cmb_seccion" name="cmb_seccion" class="form-control" onchange="mostrar(this);">
		      			<option id="vacio" name="vacio" value="vacio">Seleccione una opción</option>
					 	<option id="estados_financieros" name="estados_financieros" value="estados_financieros">Estados Financieros</option>
					 	<option id="razon_liquidez" name="razon_liquidez" value="razon_liquidez">Razón de Liquidez</option>
						<option id="razon_endeudamiento" name="razon_endeudamiento" value="razon_endeudamiento">Razón de Endeudamiento</option>
						<option id="razon_rentabilidad" name="razon_rentabilidad" value="razon_rentabilidad">Razón de Rentabilidad</option>
						<option id="razon_cobertura" name="razon_cobertura" value="razon_cobertura">Razón de Cobertura</option>
					</select>
				</div>
			</div>
		</div><hr>

		<div class="container divs" id="div_Financieros" style="display:none;">
			<h1>Pollitos en Fuga S.A.</h1>
			<span>Estados Financieros para el año que termina el Dec 31, 2015</span><br><br>

			<h2>Estado de resultados</h2>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Periodo</th>
						<th>Primer Periodo</th>
						<th>Segundo Periodo</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>Ventas</td>
						<td>10000</td>
						<td>12000</td>
					</tr>
					<tr>
						<td>Costo de Ventas</td>
						<td>6,000</td>
						<td>7,000</td>
					</tr>
					<tr>
						<td>Utilidad bruta</td>
						<td>4,000</td>
						<td>5,000</td>
					</tr>
					<tr>
						<td>Gastos de operación</td>
						<td>2,500</td>
						<td>2,600</td>
					</tr>
					<tr>
						<td>Ut. antes int. e imp.</td>
						<td>1,500</td>
						<td>2,500</td>
					</tr>
					<tr>
						<td>Gastos financieros</td>
						<td>500</td>
						<td>450</td>
					</tr>
					<tr>
						<td>Utilidad neta</td>
						<td><strong>1,000</strong></td>
						<td><strong>1,950</strong></td>
					</tr>
				</tbody>
			</table><br><br>

			<h2>Balance general</h2>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Periodo</th>
						<th>Primer Periodo</th>
						<th>Segundo Periodo</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>Efectivo</td>
						<td>2,000</td>
						<td>2,100</td>
					</tr>
					<tr>
						<td>Cuentas por cobrar</td>
						<td>1,500</td>
						<td>1,200</td>
					</tr>
					<tr>
						<td>Inventarios</td>
						<td>1,000</td>
						<td>1,100</td>
					</tr>
					<tr>
						<td>Total activo circulante</td>
						<td>4,500</td>
						<td>4,400</td>
					</tr>
					<tr>
						<td>Activo fijo neto</td>
						<td>8,000</td>
						<td>8,500</td>
					</tr>
					<tr>
						<td>Total activo</td>
						<td>12,500</td>
						<td>12,900</td>
					</tr>
					<tr>
						<td>Pasivo circultante</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Cuentas por pagar</td>
						<td>2,500</td>
						<td>2,600</td>
					</tr>
					<tr>
						<td>Pasivo a largo plazo</td>
						<td>7,500</td>
						<td>7,800</td>
					</tr>
					<tr>
						<td>Total pasivo</td>
						<td>10,000</td>
						<td>10,400</td>
					</tr>
					<tr>
						<td>Patrimonio</td>
						<td>2,500</td>
						<td>2,300</td>
					</tr>
					<tr>
						<td>Total pasivo</td>
						<td>12,500</td>
						<td>12,700</td>
					</tr>
				</tbody>
			</table>
		</div><br>

		<div class="container divs" id="div_Liquidez" style="display:none;"><br>
			<span>Las razones de liquidez se refieren a la facilidad con la que la empresa puede pagar sus cuentas</span><br><br>

			<table class="table table-hover">
				<thead>
					<tr>
						<th>Periodo</th>
						<th>Primer Periodo</th>
						<th>Segundo Periodo</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>Capital neto de trabajo</td>
						<td>2,000</td>
						<td>1,800</td>
					</tr>
					<tr>
						<td>Índice de solvencia</td>
						<td>1.8</td>
						<td>1.692</td>
					</tr>
					<tr>
						<td>Prueba ácida</td>
						<td>1.4</td>
						<td>1.269</td>
					</tr>
					<tr>
						<td>Rotación de inventarios</td>
						<td>5</td>
						<td>4.667</td>
					</tr>
					<tr>
						<td>Rotación de cartera</td>
						<td>0.881</td>
						<td>0.898</td>
					</tr>
					<tr>
						<td>Rotación de cuentas por pagar</td>
						<td>0.525</td>
						<td>0.505</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="container divs" id="div_Endeudamiento" style="display:none;">
			<h1>Endeudamiento</h1>
		</div>

		<div class="container divs" id="div_Rantabilidad" style="display:none;">
			<h1>Rentablidad</h1>
		</div>

		<div class="container divs" id="div_Cobertura" style="display:none;">
			<h1>Cobertura</h1>
		</div>

      <?php include './inc/footer.php'; ?>
    </body>
</html>