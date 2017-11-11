<?php
	
	$servidor = "localhost";
	$user = "j0na_94";
	$pssw = "Lospixies1";
	$bd = "bd_financiero";

	$conexion = new mysqli($servidor, $user, $pssw, $bd);

	if ($conexion -> connect_errno) {
    	die("Fallo la conexión:(".$conexion -> mysqli_connect_errno().")".$conexion -> mysqli_connect_errno());
    }
?>