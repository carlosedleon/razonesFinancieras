<?php
    include 'library/configServer.php';
?>

<!DOCTYPE html>
<html lang="es">
    <head>
		<title>Razones Financieras</title>
		<?php include './inc/link.php'; ?>
		<script type="text/javascript" src="js/funciones.js"></script>
		<link rel="stylesheet" type="text/css" href='./css/style.css'>

		<script type="text/javascript">
			//la función recibe como parámetros el numero de la columna a ocultar 
			function ocultarColumna(num,ver) { 
			    //aquí utilizamos el id de la tabla, en este caso es 'tabla'
			    fila=document.getElementById('tabla').getElementsByTagName('tr');

			    //mostramos u ocultamos la cabecera de la columna 
			    if (fila[0].getElementsByTagName('th')[num].style.display=='none'){
			        fila[0].getElementsByTagName('th')[num].style.display=''
			    }else{
			        fila[0].getElementsByTagName('th')[num].style.display='none'
			    }

			    //mostramos u ocultamos las celdas de la columna seleccionada
			    for(i=1;i<fila.length;i++){
			        if (fila[i].getElementsByTagName('td')[num].style.display=='none'){
			            fila[i].getElementsByTagName('td')[num].style.display='';  
			        }else{
			            fila[i].getElementsByTagName('td')[num].style.display='none'
			        }       
			    }           
			}
		</script>
    </head>

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
					<input type="date" id="periodo1_1"><br><br>
					<label>Fin</label><br>
					<input type="date" id="periodo1_2"><br><br>
					<span><input type="checkbox" checked="checked" id="chk_1" value="first_checkbox" onchange="ocultarColumna(1)"> Ver primer periodo en resultados</span><br><br>
				</div>

				<div class="col-sm-4">
					<h3>Segundo periodo</h3>
					<label>Inicio</label><br>
					<input type="date" name=""><br><br>
					<label>Fin</label><br>
					<input type="date" name=""><br><br>
					<span><input type="checkbox" checked="checked" id="chk_2" value="second_checkbox" onchange="ocultarColumna(2)"> Ver segundo periodo en resultados</span><br><br>
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
			<table class="table table-hover" id="tabla">
				<thead>
					<tr>
						<th>Periodo</th>
						<th>Primer Periodo</th>
						<th>Segundo Periodo</th>
					</tr>
				</thead>

				<tbody>
					<?php

						//**************** FILA VENTAS *******************//
						$periodo1 = ($_GET['periodo1_1']);
						$periodo2 = ($_GET['periodo1_2']);
						$ventas = "SELECT SUM(monto) FROM factura WHERE fecha between '$periodo1' and '$periodo2'";
						$resVentas=$conexion->query($ventas);

						while ($registroVentas = $resVentas->fetch_array(MYSQLI_BOTH)){
							echo'
								<tr>
									<td>Ventas</td>
									<td>'.$registroVentas[0].'</td>
									<td>'.$registroVentas[0].'</td>
								</tr>';
						}


						//**************** FILA COSTOS *******************//
						$costo = "SELECT SUM(costo) FROM factura";
						$resCosto=$conexion->query($costo);

						while ($registroCosto = $resCosto->fetch_array(MYSQLI_BOTH)){
							echo'
								<tr>
									<td>Costo de ventas</td>
									<td>'.$registroCosto[0].'</td>
									<td>'.$registroCosto[0].'</td>
								</tr>';
						}


						//**************** FILA UTILIDAD BRUTA *******************//
						$utilidad_bruta = "SELECT SUM(monto)-SUM(costo) FROM factura";
						$resUtilidadBruta=$conexion->query($utilidad_bruta);

						while ($registroUtilidadBruta = $resUtilidadBruta->fetch_array(MYSQLI_BOTH)){
							echo'
								<tr>
									<td>Utilidad bruta</td>
									<td>'.$registroUtilidadBruta[0].'</td>
									<td>'.$registroUtilidadBruta[0].'</td>
								</tr>';
						}


						//**************** FILA GASTOS OPERACION *******************//

						echo'
							<tr>
								<td>Gastos de operación</td>
								<td>8500000</td>
								<td>8500000</td>
							</tr>';


						//**************** FILA UT. ANTES INT *******************//
						$utantesint = "SELECT (SUM(monto)-SUM(costo)-0)/SUM(monto) FROM factura";
						$resUtAntesInt=$conexion->query($utantesint);

						while ($registroUtAntesInt = $resUtAntesInt->fetch_array(MYSQLI_BOTH)){
							echo'
								<tr>
									<td>Ut. antes int. e imp.</td>
									<td>'.$registroUtAntesInt[0].'</td>
									<td>'.$registroUtAntesInt[0].'</td>
								</tr>';
						}


						//**************** FILA GASTOS FINANCIEROS *******************//

						echo'
							<tr>
								<td>Gastos financieros</td>
								<td>0</td>
								<td>0</td>
							</tr>';


						//**************** FILA UTILIDAD NETA *******************//
						$utilidadNeta = "SELECT (SUM(monto)-SUM(costo)-0-SUM(impuestos)-8500000)/SUM(monto) FROM factura";
						$resUtilidadNeta=$conexion->query($utilidadNeta);

						while ($registroUtilidadNeta = $resUtilidadNeta->fetch_array(MYSQLI_BOTH)){
							echo'
								<tr>
									<td>Utilidad neta</td>
									<td>'.$registroUtilidadNeta[0].'</td>
									<td>'.$registroUtilidadNeta[0].'</td>
								</tr>';
						}
					?>
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