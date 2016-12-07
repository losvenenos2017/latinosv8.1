<?php
/* Para incluir librerías de base de datos y utilidades */
include_once ('php/utilidades.php');
	
	include_once ('php/header.inc');
	
?>

			<section class="clear">

<body> 
<div align="center"> 


				<form action="php/registro_corte.php" method="POST">
					<table>
						<tr>

							<td><h4>Nombre Corte</h4></td>
							<td><input type="text" name="nombre"></td>
						</tr>
						<tr>
							<td><h4>Descripción Corte </h4></td>
							<td><input type="text"  name="descripcion"><br>
							</td>
						</tr>
						<tr>
							<td><h4>Precio Corte</h4></td>
							<td><input type="text"  name="precio"></td>
						</tr>
						<tr>
							<td> <button> <div align="center"> <h4  class="regis_header">Crear Corte</h4> </button> </td>
							<div align="center">
						</tr>
						<br> </br>
						
					</table>
				</form>
				<br> </br>
				<br> </br>
				<br> </br>
				<br> </br>
				<br> </br>

			</section>
		</div>
		<div align="center">
		  

		
	

</section>

        <section class="bloque3">
               <img id="derecho" src="img/derecho.png">  <br> </br>
        </section>
           <br> </br>
             <br> </br>

      
      
      <?php include_once ('php/footer.inc');  ?> 
</div>
</body>
</html>