<?php

	include_once('utilidades.php');
	include_once ('../db/utilidades_sql.php');
	

		//Isset: Recupera lo que trae el metodo 
		$email=$_SESSION['email'];
		$result=get_cliente_byid($email);
		$datos=$result->fetch_assoc();
		$_id_cliente=$datos['_id_cliente'];
		$_id_barbero=isset($_POST['_id_barbero'])? $_POST['_id_barbero']:'' ;
		$fecha_corte=isset($_POST['fecha_corte'])? $_POST['fecha_corte']:'' ;
		$selecthora=isset($_POST['selecthora'])? $_POST['selecthora']:'' ;
		$_id_corte=isset($_POST['_id_corte'])? $_POST['_id_corte']:'' ;
		$fecha_hora=$fecha_corte .'-'. $selecthora;
		$result=set_agendar_cita($_id_barbero,$_id_cliente, $fecha_hora, $_id_corte, $selecthora); //set_registro metodo


			if (!$result) {
				ob_start(); //Inicia ciclo
					header ("refresh:5;url=../citas.php");
					echo "<h2> Cita Agendada Correctamente </h2>";
					
				ob_end_flush(); 

			} else {

	}


?>