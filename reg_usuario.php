<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrando Usuario</title>
</head>
<body>
<?php
/*incluiremos el archivo conexion para poder conectar a la base de datos*/
	include("js/conexion.php");
/*Variables enviadas desde el formulario de registro de usuarios*/
	$cu=$_POST['curp'];
	$nom=$_POST['Nombre'];
	$ape=$_POST['Apellido'];
	$gra=$_POST['Grado'];
	$gru=$_POST['Grupo'];
	$dir=$_POST['Direccion'];
		$tel=$_POST['Telefono'];
	/*Verificamos que las variables no vengan vacias*/	
	if($cu=="" || $nom=="" || $ape ==""|| $gra=="" || $gru=="" || $dir==""){
		echo"Error: Verifique Los Datos";
	}
	else{
	/*insertarmos datos*/
	$registrar_usuario="INSERT INTO usuarios(curp, Nombre, Apellido, Grado, Grupo, Direccion, Telefono) VALUES('$cu','$nom','$ape','$gra','$gru','$dir','$tel')";
	$registro=mysql_query($registrar_usuario, $conectar) or die("El Usuario Se Registro Anteriormente");
	echo "Registro del Usuario Exitosa";
}
?>
</body>
</html>