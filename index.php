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
		            <li><a href="estados_financieros.php">Estados Financieros</a></li>
		            <li><a href="#">R de Liquidez</a></li>
		            <li><a href="#">R de Endeudamiento</a></li>
		            <li><a href="#">R de Rentabilidad</a></li>
		            <li><a href="#">R de Cobertura</a></li>
		            <li><a href="#">Indicaciones y Recursos</a></li>
		        </ul>
		    </div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h4>Primer periodo</h4>
					<label>Inicio</label><br>
					<input type="date" name=""><br><br>
					<label>Fin</label><br>
					<input type="date" name=""><br><br>
					<span><input type="checkbox" id="cbox1" value="first_checkbox"> Ver primer periodo en resultados</span>
				</div>

				<div class="col-sm-4">
					<h4>Segundo periodo</h4>
					<label>Inicio</label><br>
					<input type="date" name=""><br><br>
					<label>Fin</label><br>
					<input type="date" name=""><br><br>
					<span><input type="checkbox" id="cbox1" value="second_checkbox"> Ver primer periodo en resultados</span>
				</div>

				<div class="col-sm-4">
					<h4>Funciones</h4>
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
		</div><br>

		<div class="container divs" id="div_Financieros" style="display:none;">
			<h1>Financieros</h1>
		</div>

		<div class="container divs" id="div_Liquidez" style="display:none;">
			<h1>Liquidez</h1>
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