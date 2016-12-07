<?php

	include_once ('../db/utilidades_sql.php');
	

		//Isset: Recupera lo que trae el metodo 
		$nombre=isset($_POST['nombre'])? $_POST['nombre']:'' ;
		$descripcion=isset($_POST['descripcion'])? $_POST['descripcion']:'' ;
		$precio=isset($_POST['precio'])? $_POST['precio']:'' ;
		$result=set_registro_corte($nombre,$descripcion,$precio); //set_registro metodo
				
			if (!$result) {
				ob_start(); //Inicia ciclo
					header ("refresh:5;url=../formulario_cortes.php");
					echo "<h2> Corte Creado Correctamente </h2>";
					
				ob_end_flush(); 

			} else {
		 
		
	}


?>