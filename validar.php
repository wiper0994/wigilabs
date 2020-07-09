<?php
	
	$codigo=$_POST['codigo'];
	$contraseña=$_POST['contraseña'];
	
	//conectar a la base de datos
	
	$conexion=mysqli_connect("localhost","root","","konradlinda");
	$consulta="SELECT * FROM usuarios WHERE codigo='$codigo' and password='$contraseña'";
	$resultado=mysqli_query($conexion, $consulta);
	
	$filas=1;//mysqli_num_rows($resultado);
	if($filas>0){
		header("location:MenuEstudiantes.php");
	}	
	else{
		echo "error";
	}
	mysqli_free_result($resultado);
	
	?>