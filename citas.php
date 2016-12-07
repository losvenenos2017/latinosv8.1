<?php

/* Para incluir librerías de base de datos y utilidades */
	include_once ('php/utilidades.php');
	include_once ('db/utilidades_sql.php');	
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
		<tr>
			<td>
				<h4>
					Seleccione Fecha
				</h4> 
			</td>
			<td>
					<input type="date" id="txtfecha" name="fecha_corte" class="form-control" onchange="function(cambioHora)" value="<?php echo date("Y-n-j"); ?>" required/> 
			</td>
		</tr>
		<tr>
			<td>
				<h4>
					Seleccione Hora
				</h4> 
			</td>
			<td>
			
            <select id="horario"></select>
            
            <script type="text/javascript">
                $(document).ready(function() { 

    				 $(".form-control").change(function() {
    				 
    				 	    var form_data = {
	                                "fecha" : $("#txtfecha").val()
	                        };
	                        $.ajax({
	                                data: form_data,
	                                type: "POST",
	                                url: "php/validarturno.php",
	                                
	                                success: function(response)
	                                {
	                                    alert ("hola");
	                                    $('#horario').html(response).fadeIn();
	                                }
	                        });
	                    });
                	});
            </script>
			
			</td>
		</tr>
		<tr>
			<td>
				<h4>
					Seleccione Corte
				</h4> 
			</td>
			<td>
				<select name="_id_corte">
					<?php
						$query = $mysqlii -> query ("SELECT * FROM cortes");
						while ($valores = mysqli_fetch_array($query)) {
							echo '<option value="'.$valores[_id_corte].'">'.$valores[nombre].'  </option>'        ;
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
						<td> <h4> Gracias por preferirnos </h4></div>
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
