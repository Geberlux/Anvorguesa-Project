<?php
function listarEnOptions($tabla,$campoVisible,$id){

	
	// 1. El soft de PHP debe identificarse ante MYSQL
	if( mysqli_connect("localhost","root","", "anvorguesa") ){
	// echo "OK";
	
	// 2. Seleccionar una base
	$con = mysqli_connect('localhost','root','','anvorguesa' );
		// echo "OK";
		
		// 3. Ejecutar una consulta SQL
		$consulta = "SELECT * FROM $tabla";
		if ( $resultado = mysqli_query($con, $consulta) ){
		     
			 
			// 4. Extraer filas de resultados
			echo '<select name="'.$tabla.'">';
			
			while( $fila = mysqli_fetch_array($resultado) ){
				echo '<option value="'.$fila["$id"].'">'.$fila["$campoVisible"]."</option>\n";
			}
			
			echo "</select>";
		
			
			
		} else {
			echo "La consulta tiene errores";
		}
		
		
	
	
	
	
} else {
	echo "NO tenes permiso de usar MySQL";
}



}
?>