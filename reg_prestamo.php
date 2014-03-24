<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de Libros</title>
<link rel="stylesheet" href="maqueta.css" type="text/css"> 
<script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
	<?php
	include("js/conexion.php"); 
		$cu=$_POST['curp'];
		$fe_pres=$_POST['Fecha_prestamo'];
		$co=$_POST['Codigo'];
		if($cu=="" || $fe_pres=="" || $co ==""){
		echo"Error: Verifique Los Datos";
	}
	else{
	/*insertarmos datos*/
	$registrar_usuario="INSERT INTO prestamos(Codigo, curp, Fecha_prestamo) VALUES('$co','$cu','$fe_pres')";
	$registro=mysql_query($registrar_usuario, $conectar) or die("No Se Encuentra El Libro Rebice El Codigo");
	echo "Registro del Prestamo Exitosa";

}

	?>

</body>
</html>