<?php

/* Para incluir librerías de base de datos y utilidades */
	include_once ('php/utilidades.php');	
	include_once ('php/header.inc');
    
$mysqlii = new mysqli('localhost', 'root', '', 'latinosv7'); 
	
?>
<body> 
<div align="center"> 
<form action="php/registro_cita.php" method="POST">
	<table>
		<tr>
			<td>
				<h4>
					Seleccione barbero
				</h4>
			</td>
		<td>
			<select name="selectbarbero">
				<?php
					$query = $mysqlii -> query ("SELECT * FROM barberos");
					while ($valores = mysqli_fetch_array($query)) {
						echo '<option value="'.$valores[_id_barbero].'">'.$valores[nombrescompletos].'</option>';
					}
				?>
			</select>
		</td>
		</tr>
		<tr>
			<td>
				<h4>
					seleccione su fecha
				</h4> 
			</td>
			<td>
					<input type="date" name="fecha_corte">
			</td>
		</tr>
		<tr>
			<td>
				<h4>
					seleccione su hora
				</h4> 
			</td>
			<td>
				<select name="selecthora">
					<?php
						$query = $mysqlii -> query ("SELECT * FROM turno");
						while ($valores = mysqli_fetch_array($query)) {
							echo '<option value="'.$valores[_id_turno].'">'.$valores[hora].'</option>';
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<h4>
					seleccione su corte
				</h4> 
			</td>
			<td>
				<select name="selectcorte">
					<?php
						$query = $mysqlii -> query ("SELECT * FROM cortes");
						while ($valores = mysqli_fetch_array($query)) {
							echo '<option value="'.$valores[_id_corte].'">'.$valores[nombre].'</option>';
						}
					?>
				</select>
			</td>
		</tr>
			<td>
				<button>
					<div align="center">
						<h4 class="regis_header">
							Agendar 
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

	
</body>

</html>