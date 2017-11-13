<?php
    include 'library/configServer.php';


    //*************************  TABLA ESTADO DE RESULTADOS *******************************//

    $periodo11=$_GET['periodo1_1'];
	$periodo12=$_GET['periodo1_2'];
	$periodo21=$_GET['periodo2_1'];
	$periodo22=$_GET['periodo2_2'];
	$efectivo1='9500000';
	$efectivo2='10000000';
	$activofijo='11000000';
	$pasivoalargoplazo='5000000';
	$gastosoperacion='8500000';
	$gastosoperacion2='9000000';
	$gastosfinancieros='0';

	$consultaVentas = "SELECT SUM(total) FROM factura WHERE fecha between '$periodo11' and '$periodo12'";
	$resVentas=$conexion->query($consultaVentas);
	$ventas = $resVentas->fetch_array(MYSQLI_BOTH);

	$consultaVentas2 = "SELECT SUM(total) FROM factura WHERE fecha between '$periodo21' and '$periodo22'";
	$resVentas2=$conexion->query($consultaVentas2);
	$ventas2 = $resVentas2->fetch_array(MYSQLI_BOTH);

	$consultaVentasF = "SELECT SUM(total) FROM factura WHERE fecha between '$periodo12' and '$periodo11'";
	$resVentasF=$conexion->query($consultaVentasF);
	$ventasF = $resVentasF->fetch_array(MYSQLI_BOTH);

	$consultaVentasF2 = "SELECT SUM(total) FROM factura WHERE fecha between '$periodo22' and '$periodo21'";
	$resVentasF2=$conexion->query($consultaVentasF2);
	$ventas2F = $resVentasF2->fetch_array(MYSQLI_BOTH);

	$consultaCosto = "SELECT SUM(costo) FROM factura WHERE fecha between '$periodo11' and '$periodo12'";
	$resCosto=$conexion->query($consultaCosto);
	$costo = $resCosto->fetch_array(MYSQLI_BOTH);

	$consultaCosto2 = "SELECT SUM(costo) FROM factura WHERE fecha between '$periodo21' and '$periodo22'";
	$resCosto2=$conexion->query($consultaCosto2);
	$costo2 = $resCosto2->fetch_array(MYSQLI_BOTH);

	$consultaCostoF = "SELECT SUM(costo) FROM factura WHERE fecha between '$periodo12' and '$periodo11'";
	$resCostoF=$conexion->query($consultaCostoF);
	$costoF = $resCostoF->fetch_array(MYSQLI_BOTH);

	$consultaCostoF2 = "SELECT SUM(costo) FROM factura WHERE fecha between '$periodo22' and '$periodo21'";
	$resCostoF2=$conexion->query($consultaCostoF2);
	$costo2F = $resCostoF2->fetch_array(MYSQLI_BOTH);

	$consultaImpuestos = "SELECT SUM(impuestos) FROM factura WHERE fecha between '$periodo11' and '$periodo12'";
	$resImpuestos=$conexion->query($consultaImpuestos);
	$impuestos = $resImpuestos->fetch_array(MYSQLI_BOTH);

	$consultaImpuestos2 = "SELECT SUM(impuestos) FROM factura WHERE fecha between '$periodo21' and '$periodo22'";
	$resImpuestos2=$conexion->query($consultaImpuestos2);
	$impuestos2 = $resImpuestos2->fetch_array(MYSQLI_BOTH);

	$utilidadbruta = (($ventas[0]-$costo[0])/$ventas[0]);

	$utilidadbruta2 = (($ventas2[0]-$costo2[0])/$ventas2[0]);

	$utantesint = (($ventas[0]-$costo[0]-$gastosfinancieros)/$ventas[0]);

	$utantesint2 = (($ventas2[0]-$costo2[0]-$gastosfinancieros)/$ventas2[0]);

	$margennetoutilidades = (($ventas[0]-$costo[0]-$gastosfinancieros-$impuestos[0]-$gastosoperacion)/$ventas[0]);

	$margennetoutilidades2 = (($ventas2[0]-$costo2[0]-$gastosfinancieros-$impuestos2[0]-$gastosoperacion)/$ventas2[0]);

	//*************************  TABLA BALANCE GENERAL *******************************//

	$consultaSaldoCxc = "SELECT (SUM(monto)-SUM(pago)) FROM cxc";
	$resSaldocxc=$conexion->query($consultaSaldoCxc);
	$saldo_cxc = $resSaldocxc->fetch_array(MYSQLI_BOTH);


	$consultaSaldoCxp = "SELECT (SUM(monto)-SUM(pago)) FROM cxp";
	$resSaldocxp=$conexion->query($consultaSaldoCxp);
	$saldo_cxp = $resSaldocxp->fetch_array(MYSQLI_BOTH);


	$consultaCxc_delperiodoI = ("SELECT SUM(monto) FROM cxc WHERE fecha between '$periodo11' and '$periodo12'");
	$rescxc_delperiodoI=$conexion->query($consultaCxc_delperiodoI);
	$cxc_delperiodoI = $rescxc_delperiodoI->fetch_array(MYSQLI_BOTH);


	$consultaCxp_delperiodoI = ("SELECT SUM(monto) FROM cxp WHERE fecha between '$periodo11' and '$periodo12'");
	$rescxp_delperiodoI=$conexion->query($consultaCxp_delperiodoI);
	$cxp_delperiodoI = $rescxp_delperiodoI->fetch_array(MYSQLI_BOTH);


	$consultaCxc_delperiodoI2 = "SELECT SUM(monto) FROM cxc WHERE fecha between '$periodo21' and '$periodo22'";
	$rescxc_delperiodoI2=$conexion->query($consultaCxc_delperiodoI2);
	$cxc_delperiodoI2 = $rescxc_delperiodoI2->fetch_array(MYSQLI_BOTH);


	$consultaCxp_delperiodoI2 = "SELECT SUM(monto) FROM cxp WHERE fecha between '$periodo21' and '$periodo22'";
	$rescxp_delperiodoI2=$conexion->query($consultaCxp_delperiodoI2);
	$cxp_delperiodoI2 = $rescxp_delperiodoI2->fetch_array(MYSQLI_BOTH);


	$consultaCxc_delperiodoF = "SELECT SUM(monto) FROM cxc WHERE fecha between '$periodo12' and '$periodo11'";
	$rescxc_delperiodoF=$conexion->query($consultaCxc_delperiodoF);
	$cxc_delperiodoF = $rescxc_delperiodoF->fetch_array(MYSQLI_BOTH);


	$consultaCxp_delperiodoF = "SELECT SUM(monto) FROM cxp WHERE fecha between '$periodo12' and '$periodo11'";
	$rescxp_delperiodoF=$conexion->query($consultaCxp_delperiodoF);
	$cxp_delperiodoF = $rescxp_delperiodoF->fetch_array(MYSQLI_BOTH);


	$consultaCxc_delperiodoF2 = "SELECT SUM(monto) FROM cxc WHERE fecha between '$periodo21' and '$periodo22'";
	$rescxc_delperiodoF2=$conexion->query($consultaCxc_delperiodoF2);
	$cxc_delperiodoF2 = $rescxc_delperiodoF2->fetch_array(MYSQLI_BOTH);


	$consultaCxp_delperiodoF2 = "SELECT SUM(monto) FROM cxc WHERE fecha between '$periodo21' and '$periodo22'";
	$rescxp_delperiodoF2=$conexion->query($consultaCxp_delperiodoF2);
	$cxp_delperiodoF2 = $rescxp_delperiodoF2->fetch_array(MYSQLI_BOTH);


	$consultaAbonos_cxc_delperiodo = "SELECT SUM(total) FROM rec_cxc WHERE fecha between '$periodo11' and '$periodo12'";
	$resabonos_cxc_delperiodo=$conexion->query($consultaAbonos_cxc_delperiodo);
	$abonos_cxc_delperiodo = $resabonos_cxc_delperiodo->fetch_array(MYSQLI_BOTH);

	$consultaAbonos_cxp_delperiodo = "SELECT SUM(total) FROM rec_cxp WHERE fecha between '$periodo11' and '$periodo12'";
	$resabonos_cxp_delperiodo=$conexion->query($consultaAbonos_cxp_delperiodo);
	$abonos_cxp_delperiodo = $resabonos_cxp_delperiodo->fetch_array(MYSQLI_BOTH);


	$consultaAbonos_cxc_delperiodo2 = "SELECT SUM(total) FROM rec_cxc WHERE fecha between '$periodo21' and '$periodo22'";
	$resabonos_cxc_delperiodo2=$conexion->query($consultaAbonos_cxc_delperiodo2);
	$abonos_cxc_delperiodo2 = $resabonos_cxc_delperiodo2->fetch_array(MYSQLI_BOTH);


	$consultaAbonos_cxp_delperiodo2 = "SELECT SUM(total) FROM rec_cxp WHERE fecha between '$periodo21' and '$periodo22'";
	$resabonos_cxp_delperiodo2=$conexion->query($consultaAbonos_cxp_delperiodo2);
	$abonos_cxp_delperiodo2 = $resabonos_cxp_delperiodo2->fetch_array(MYSQLI_BOTH);


	$consultaInventario = "SELECT SUM(costo * cantidad) FROM articulo";
	$resinventario=$conexion->query($consultaInventario);
	$inventario = $resinventario->fetch_array(MYSQLI_BOTH);

	$saldo_cxc_inicial = ($saldo_cxc[0]-$cxc_delperiodoI[0]+$abonos_cxc_delperiodo[0]);


	$saldo_cxp_inicial = ($saldo_cxp[0]-$cxp_delperiodoI[0]+$abonos_cxp_delperiodo[0]);


	$saldo_cxc_inicial2 = ($saldo_cxc[0]-$cxc_delperiodoI2[0]+$abonos_cxc_delperiodo2[0]);


	$saldo_cxp_inicial2 = ($saldo_cxp[0]-$cxp_delperiodoI2[0]+$abonos_cxp_delperiodo2[0]);


	$saldo_cxc_final = ($saldo_cxc[0]-$cxc_delperiodoF[0]+$abonos_cxc_delperiodo[0]);


	$saldo_cxp_final = ($saldo_cxp[0]-$cxp_delperiodoF[0]+$abonos_cxp_delperiodo[0]);


	$saldo_cxc_final2 = ($saldo_cxc[0]-$cxc_delperiodoF2[0]+$abonos_cxc_delperiodo2[0]);


	$saldo_cxp_final2 = ($saldo_cxp[0]-$cxp_delperiodoF2[0]+$abonos_cxp_delperiodo2[0]);


	$activocirculante = ($efectivo1 + $inventario[0] + $saldo_cxc_final);


	$activocirculante2 = ($efectivo1 + $inventario[0] + $saldo_cxc_final2);


	$activototal = ($activocirculante + $activofijo);


	$activototal2 = ($activocirculante2 + $activofijo);


	$pasivocirculante = $saldo_cxp_final;


	$pasivocirculante2 = $saldo_cxp_final2;


	$totalpasivo = $pasivocirculante + $pasivoalargoplazo;


	$totalpasivo2 = $pasivocirculante2 + $pasivoalargoplazo;


	//*************************  TABLA RAZON DE LIQUIDEZ *******************************//

	$capitalneto = ($activocirculante-$pasivocirculante);


	$capitalneto2 = ($activocirculante2-$pasivocirculante2);


	$indicesolvencia = ($activocirculante/$pasivocirculante);


	$indicesolvencia2 = ($activocirculante2/$pasivocirculante2);


	$pruebaacida = (($activocirculante-$inventario[0])/$pasivocirculante);


	$pruebaacida2 = (($activocirculante2-$inventario[0])/$pasivocirculante2);


	$inventarioinicial = ($inventario[0]-$ventas[0]+$costo[0]);


	$inventarioinicial2 = ($inventario[0]-$ventas2[0]+$costo2[0]);


	$inventariofinal = ($inventario[0]-$ventasF[0]+$costoF[0]);


	$inventariofinal2 = ($inventario[0]-$ventas2F[0]+$costo2F[0]);


	$rotacioninventario = ($costo[0]/(($inventarioinicial+$inventariofinal)/2));


	$rotacioninventario2 = ($costo2[0]/(($inventarioinicial2+$inventariofinal2)/2));


	$rotacioncartera = ($cxc_delperiodoI[0]/(($saldo_cxc_inicial+$saldo_cxc_final)/2));


	$rotacioncartera2 = ($cxc_delperiodoI2[0]/(($saldo_cxc_inicial2+$saldo_cxc_final2)/2));


	$rotacioncuentasporpagar = ($cxp_delperiodoI[0]/(($saldo_cxp_inicial+$saldo_cxp_final)/2));


	$rotacioncuentasporpagar2 = ($cxp_delperiodoI2[0]/(($saldo_cxp_inicial2+$saldo_cxp_final2)/2));
?>

<!DOCTYPE html>
<html lang="es">
    <head>
		<title>Razones Financieras</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/logo.ico" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
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
				<form action="index.php" method="get">
					<div class="col-sm-4">
						<h3>Primer periodo</h3>
						<label>Inicio</label><br>
						<input type="date" id="periodo1_1" name="periodo1_1" value="2015-01-01"><br><br>
						<label>Fin</label><br>
						<input type="date" id="periodo1_2" name="periodo1_2" value="2015-05-01"><br><br>
						<span><input type="checkbox" checked="checked" id="chk_1" value="first_checkbox" onchange="ocultarColumna(1)"> Ver primer periodo en resultados</span><br><br>
					</div>

					<div class="col-sm-4">
						<h3>Segundo periodo</h3>
						<label>Inicio</label><br>
						<input type="date" name="periodo2_1" id="periodo2_1" value="2016-01-01"><br><br>
						<label>Fin</label><br>
						<input type="date" name="periodo2_2" id="periodo2_2" value="2017-01-01"><br><br>
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
					<input type="submit" name="" class="btn-default">
				</form>
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

						echo'
						<tr>
							<td>Ventas</td>
							<td>'.$ventas[0].'</td>
							<td>'.$ventas2[0].'</td>
						</tr>';


						//**************** FILA COSTOS *******************//

						echo'
						<tr>
							<td>Costo de ventas</td>
							<td>'.$costo[0].'</td>
							<td>'.$costo2[0].'</td>
						</tr>';

						//**************** FILA UTILIDAD BRUTA *******************//

						echo'
						<tr>
							<td>Utilidad bruta</td>
							<td>'.$utilidadbruta.'</td>
							<td>'.$utilidadbruta2.'</td>
						</tr>';

						//**************** FILA GASTOS OPERACION *******************//

						echo'
							<tr>
								<td>Gastos de operación</td>
								<td>'.$gastosoperacion.'</td>
								<td>'.$gastosoperacion2.'</td>
							</tr>';


						//**************** FILA UT. ANTES INT *******************//

						echo'
						<tr>
							<td>Ut. antes int. e imp.</td>
							<td>'.$utantesint.'</td>
							<td>'.$utantesint2.'</td>
						</tr>';

						//**************** FILA GASTOS FINANCIEROS *******************//

						echo'
							<tr>
								<td>Gastos financieros</td>
								<td>'.$gastosfinancieros.'</td>
								<td>'.$gastosfinancieros.'</td>
							</tr>';


						//**************** FILA UTILIDAD NETA *******************//

						echo'
						<tr>
							<td>Utilidad neta</td>
							<td>'.$margennetoutilidades.'</td>
							<td>'.$margennetoutilidades2.'</td>
						</tr>';
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
					<?php
						
						//**************** FILA EFECTIVO *******************//

						echo'
							<tr>
								<td>Efectivo</td>
								<td>'.$efectivo1.'</td>
								<td>'.$efectivo2.'</td>
							</tr>';


						//**************** FILA CUENTAS POR COBRAR *******************//

						echo'
						<tr>
							<td>Cuentas por cobrar</td>
							<td>'.$cxc_delperiodoI[0].'</td>
							<td>'.$cxc_delperiodoI2[0].'</td>
						</tr>';


						//**************** FILA INVENTARIOS *******************//

						echo'
						<tr>
							<td>Inventarios</td>
							<td>'.$inventario[0].'</td>
							<td>'.$inventario[0].'</td>
						</tr>';


						//**************** FILA ACTIVO CIRCULANTE *******************//
						echo'
						<tr>
							<td>Total activo circulante</td>
							<td>'.$activocirculante.'</td>
							<td>'.$activocirculante2.'</td>
						</tr>';


						//**************** FILA ACTIVO FIJO *******************//
						echo'
						<tr>
							<td>Total fijo neto</td>
							<td>'.$activofijo.'</td>
							<td>'.$activofijo.'</td>
						</tr>';


						//**************** FILA TOTAL *******************//
						echo'
						<tr>
							<td>Total activo</td>
							<td>'.$activototal.'</td>
							<td>'.$activototal2.'</td>
						</tr>';


						//**************** FILA PASIVO CIRCULANTE *******************//
						echo'
						<tr>
							<td>Pasivo circultante</td>
							<td>'.$pasivocirculante.'</td>
							<td>'.$pasivocirculante2.'</td>
						</tr>';


						//**************** FILA CUENTAS POR PAGAR *******************//

						echo'
						<tr>
							<td>Cuentas por pagar</td>
							<td>'.$cxp_delperiodoI[0].'</td>
							<td>'.$cxp_delperiodoI2[0].'</td>
						</tr>';


						//**************** FILA PASIVO A LARGO PLAZO *******************//

						echo'
						<tr>
							<td>Pasivo a largo plazo</td>
							<td>'.$pasivoalargoplazo.'</td>
							<td>'.$pasivoalargoplazo.'</td>
						</tr>';


						//**************** FILA TOTAL PASIVO *******************//

						echo'
						<tr>
							<td>Total pasivo</td>
							<td>'.$totalpasivo.'</td>
							<td>'.$totalpasivo2.'</td>
						</tr>';
					?>
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
					<?php  
						//**************** FILA CAPITAL NETO DE TRABAJO *******************//

						echo'
						<tr>
							<td>Capital neto de trabajo</td>
							<td>'.$capitalneto.'</td>
							<td>'.$capitalneto2.'</td>
						</tr>';

						//**************** FILA INDICE DE SOLVENCIA *******************//
						echo'
						<tr>
							<td>Índice de solvencia</td>
							<td>'.$indicesolvencia.'</td>
							<td>'.$indicesolvencia2.'</td>
						</tr>';


						//**************** FILA PRUEBA ACIDA *******************//
						echo'
						<tr>
							<td>Prueba ácida</td>
							<td>'.$pruebaacida.'</td>
							<td>'.$pruebaacida2.'</td>
						</tr>';


						//**************** FILA ROTACION INVENTARIOS *******************//
						echo'
						<tr>
							<td>Rotación de inventarios</td>
							<td>'.$rotacioninventario.'</td>
							<td>'.$rotacioninventario2.'</td>
						</tr>';


						//**************** FILA ROTACION DE CARTERA *******************//
						echo'
						<tr>
							<td>Rotación de cartera</td>
							<td>'.$rotacioncartera.'</td>
							<td>'.$rotacioncartera2.'</td>
						</tr>';


						//**************** FILA ROTACION DE CUENTAS POR PAGAR *******************//
						echo'
						<tr>
							<td>Rotación de cuentas por pagar</td>
							<td>'.$rotacioncuentasporpagar.'</td>
							<td>'.$rotacioncuentasporpagar2.'</td>
						</tr>';
					?>
				</tbody>
			</table>
		</div>

		<div class="container divs" id="div_Endeudamiento" style="display:none;"><br>
			<span>Mide la proporción de los activos que están financiados por terceros. Recordemos que los activos de una empresa son financiados o bien por los socios o bien por terceros (proveedores o acreedores).</span><br><br>

			<table class="table table-hover">
				<thead>
					<tr>
						<th>Periodo</th>
						<th>Primer Periodo</th>
						<th>Segundo Periodo</th>
					</tr>
				</thead>

				<tbody>
					<?php  
						//**************** FILA CAPITAL NETO DE TRABAJO *******************//

						echo'
						<tr>
							<td>Capital neto de trabajo</td>
							<td>'.$capitalneto.'</td>
							<td>'.$capitalneto2.'</td>
						</tr>';

						//**************** FILA INDICE DE SOLVENCIA *******************//
						echo'
						<tr>
							<td>Índice de solvencia</td>
							<td>'.$indicesolvencia.'</td>
							<td>'.$indicesolvencia2.'</td>
						</tr>';


						//**************** FILA PRUEBA ACIDA *******************//
						echo'
						<tr>
							<td>Prueba ácida</td>
							<td>'.$pruebaacida.'</td>
							<td>'.$pruebaacida2.'</td>
						</tr>';


						//**************** FILA ROTACION INVENTARIOS *******************//
						echo'
						<tr>
							<td>Rotación de inventarios</td>
							<td>'.$rotacioninventario.'</td>
							<td>'.$rotacioninventario2.'</td>
						</tr>';


						//**************** FILA ROTACION DE CARTERA *******************//
						echo'
						<tr>
							<td>Rotación de cartera</td>
							<td>'.$rotacioncartera.'</td>
							<td>'.$rotacioncartera2.'</td>
						</tr>';


						//**************** FILA ROTACION DE CUENTAS POR PAGAR *******************//
						echo'
						<tr>
							<td>Rotación de cuentas por pagar</td>
							<td>'.$rotacioncuentasporpagar.'</td>
							<td>'.$rotacioncuentasporpagar2.'</td>
						</tr>';
					?>
				</tbody>
			</table>
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