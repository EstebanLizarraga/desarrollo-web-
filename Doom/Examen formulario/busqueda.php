<?php
	
	$conexion=mysqli_connect('localhost','root','','ajaxbd');
	$sql="SELECT * from usuario";
	$result=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($result)){
		echo '
		<tr>
		<td>'.$mostrar['ID'].'</td>
		<td>'.$mostrar['email'].'</td>
		<td>'.$mostrar['contraseña'].'</td>
		<td>'.$mostrar['year'].'</td>
		</tr>';
	}
	


?>