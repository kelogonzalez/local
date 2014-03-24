<?php
    header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
//Agregar Un Script para evitar la Caché por problemas que tienen algunos navegadores

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contacto</title>
<link rel="stylesheet" href="maqueta.css" type="text/css">
<script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
<div id="mail">
<!--onsubmit es para que al presionar el boton guardar nos lleve a la funcion enviarDatosUsuario que esta en ajax.js y asi poder registrar -->
<form method="post" action="" onsubmit="enviarDatosEMail(); return false" name="contacto">
	<table align="center">
	<tr><td colspan="2" align="center"><h3>Contactanos</h3></td></tr>
	<tr><td>Nombre</td><td><input type="text" name="Nombre" /></td></tr>
	<tr><td>Grado</td><td><input type="text" name="Grado" /></td></tr>
	<tr><td>Grupo</td><td><input type="text" name="Grupo" /></td></tr>
	<tr><td>Correo</td><td><input type="text" name="Correo" /></td></tr>
	<tr><td>Asunto</td><td><textarea name="Asunto" cols="15" rows="6"></textarea></td></tr>
	<tr><td colspan="2" align="center"><input type="submit" value="Enviar" /></td></tr>
	<tr><td colspan="2" align="center"><div id="resultado"></div></td></tr>
  </table>
</form>
</div>
</body>
</html>