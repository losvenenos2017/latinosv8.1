<?php

	include_once('utilidades.php');
	include_once ('../db/utilidades_sql.php');
	

		//Isset: Recupera lo que trae el metodo 
		$fecha_corte=isset($_POST['fecha'])? $_POST['fecha']:'' ;
		$result=get_validar_turno_agendado($fecha_corte); //set_registro metodo

		while ($fila = $result->fetch_assoc()) {
    	echo '<option value="'.$fila[_id_turno].'">'.$fila[hora].'</option>';
    	//echo '<option value="'.$valores[_id_turno].'">'.$valores[hora].'</option>';
		}
		

?>