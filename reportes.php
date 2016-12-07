<?php
/* Para incluir librerías de base de datos y utilidades */
include_once ('php/utilidades.php');
	
	include_once ('php/header.inc');
	
?>

			<section class="clear">

<body> 
<div align="center">
<tr></tr>

<tr><h1>  Bienvenido a su modulo de reportes </h1></tr>
<td>

<?php

/* Para incluir librerías de base de datos y utilidades */
	include_once ('php/utilidades.php');
	include_once ('db/utilidades_sql.php');	
	include_once ('php/header.inc');
    
$mysqlii = new mysqli('localhost', 'root', '', 'latinosv7'); 
	
?>
<body> 
<div align=""> 
<form action="php/reportes.php" method="POST">
	<table>
				
	<td>
					<h4>
					Seleccione Fecha de inicio 
					</h4> 
	</td>
	<td>
					<input type="date" id="txtfecha" name="fecha_corte" class="form-control" value="<?php echo date("Y-n-j"); ?>" required/> 
	</td>
	<tr>
	<td>
								
				<h4>
					Seleccione Fecha de Fin 
				</h4> 
	</td>
	<td>
					<input type="date" id="txtfecha" name="fecha_corte" class="form-control" value="<?php echo date("Y-n-j"); ?>" required/> 
			
		</tr>
		<tr><td>
				<h4>
					Seleccione Barbero
				</h4>
			</td>
		<td>
			<select name="_id_barbero">

 
				<?php
					$query = $mysqlii -> query ("SELECT * FROM barberos");
					while ($valores = mysqli_fetch_array($query)) {
						echo '<option value="'.$valores[_id_barbero].'">'.$valores[nombrescompletos].'</option>';
					}
				?>
			</select>
		
			</td>
		</tr>	
		</tr>
			<td>
				<button>
					<div align="center">
						<h4 class="regis_header">
							generar 
						</h4> 
						
					</div>
				</button> 
			</td>
		</tr>
	</table>
</form>
				
			</section>
		</div>
		<div align="center">

	
</section>

        <section class="bloque3">
          <img id="derecho" src="img/derecho.png">
        </section>

      
      
      <?php include_once ('php/footer.inc');  ?> 
</div>
    </body>
</html>
