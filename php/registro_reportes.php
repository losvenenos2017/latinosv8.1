<?php

	include_once('utilidades.php');
	include_once ('../db/utilidades_sql.php');
	

		//Isset: Recupera lo que trae el metodo 
		$email=$_SESSION['email'];
		$result=get_cliente_byid($email);
		$datos=$result->fetch_assoc();
		$selecthora=isset($_POST['selecthora'])? $_POST['selecthora']:'' ;
		$_id_barbero=isset($_POST['_id_barbero'])? $_POST['_id_barbero']:'' ;
		$result=set_registro_reportes($fecha_hora, $selecthora,$_id_barbero,); //set_registro metodo


			if (!$result) {
				ob_start(); //Inicia ciclo
					header ("refresh:5;url=../reportes.php");
					echo "<h2> C </h2>";
					
				ob_end_flush(); 

			} else {

	}


?>