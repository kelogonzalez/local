<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificando Usuario</title>
</head>
<body>
	<?php
/*incluiremos el archivo conexion para poder conectar a la base de datos*/
session_start();
/*Variables enviadas desde el formulario de registro de usuarios*/
$nom=$_POST['Nombre'];
$pass=$_POST['pass'];
	/*Verificamos que las variables no vengan vacias*/	
	if($nom=="" || $pass==""){
		echo"Error: Introduzca el Nombre y Password";
		echo "<tr><td colspan='2' align='center' ><a href='javascript:history.back(1)'>Volvwe a Intentarlo</a></td></tr>";
	}
	else if ($nom=="Admin" && $pass=="123"){//AQUI PODEMOS CAMBIARLE EL PASSWORD Y EL NOMBRE DEL ADMINISTRADOR
		?>  <?php
		$_SESSION['Administrador']=$nom;
			echo "Bienvenido: ", $_SESSION['Administrador'];
			echo"<tr><td colspan='2' align='center' ><a href='index.php'>  Menu Administrador</a></td></tr>";
		}
			else { echo "Incorrecto Password";
			echo "<tr><td colspan='2' align='center' ><a href='index.php'>Volver a Intentarlo</a></td></tr>";
	/*insertarmos datos*/ }?>	
</body>
</html>