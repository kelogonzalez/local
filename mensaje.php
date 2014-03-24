<?php


    header("Expires: Tue, 03 Jul 2015 06:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset = 'utf-8'>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Censo Locales Comerciales</title>
<!--ES IMPORTANTE PONER EL ESTILO CSS LLAMADA maqueta.css ESTA DENTRO DE LA CARPETA DE LA PAGINA-->
<link rel="stylesheet" href="maqueta.css" type="text/css">
<script language="JavaScript" type="text/javascript" src="js/ajax.js"></script><!--SE INCORPORA EL SCRIPT AJAX-->
</head> <!--TERMINA DE INCORPORARSE LOS SCRIPT QUE NECESITA LA PAGINA PARA SU FUNCIONAMIENTO-->
<body>
<div id="ImgPan"><a href="index.php"><img src="images/logo.png"  width="400" height="100"  border="0" /></a> </div><!--NSERTAMOS EL LOGO DE LA ESCUELA
ESTA ESTA DENTRO DE LA CARPETA images-->

	<?php 
//CODIGO PHP
	session_start(); //FUNCION PHP PARA CARGAR LAS VARIABLES 'SESSION'
if (isset($_SESSION['Administrador'])){ //CHECAMOS SI NO SE INICIO INICIO SESION ANTERIORMENTE PARA MOSTRAR EL MENU DE ADMINISTRACION
	?>

	 <ul class="Menuprin">
		<li><a href="index.php">Inicio</a></li>
    <li><a href="#">Registrar</a>
     <ul>
    <!--<li><a href="usuario.php">Usuarios</a></li>-->
		<li><a href="libro.php">Locales</a></li>
		<!--<li><a href="prestamo.php">Prestamos</a></li>-->
	</ul></li>
		<li><a href="#">Actualizar</a>
		<ul>
		<!--<li><a href="cambios.php">Usuario</a></li>-->
		<li><a href="cambios_lib.php">Locales</a></li>
		<!--<li><a href="entrega.php">Entregas</a></li>-->
		</ul></li>
		<li><a href="#">Eliminar</a>
		<ul>
		<!--<li><a href="cambios.php">Usuario</a></li>-->
		<li><a href="bu_eli_nom.php">Por Nombre</a></li>
		<li><a href="bu_eli_blo.php">Por Cédula</a></li>
		<li><a href="bu_eli_fe.php">Por Ubicación</a></li>
		<!--<li><a href="entrega.php">Entregas</a></li>-->
		</ul></li>
		<li><a href="#">Busquedas</a>
		<ul>
		<li><a href="bu_tit.php">Por Cédula</a></li>
		<li><a href="bu_aut.php">Por Nombres</a></li>
		<li><a href="bu_edit.php">Por Ubicación</a></li>
		<li><a href="bu_per.php">Por Permiso</a></li>

		<!--<li><a href="bu_prestamo.php">Prestamos</a></li>-->
	</ul></li>
	
		<li><a href="salir.php">Cerrar Sesión</a></li>
	 </ul>
	 <div id="mensaje">
DATOS ELIMINADOS CON EXITO</div>
</form>
<div id="formcontact">
</div>
	 <?php } else {?>	
	<ul class="Menuinvitado">
		<li><a href="index.php">Inicio</a></li>
 		<li><a href="#">Busqueda</a>
		<ul>
		<li><a href="bu_tit.php">Bloque</a></li>
		<li><a href="bu_aut.php">Nombres</a></li>
		<li><a href="bu_edit.php">Fecha</a></li>
		<!--<li><a href="bu_prestamo.php">Prestamos</a></li>-->
	</ul></li>
	<li><a href="http://kelogonzalez.zxq.net">Diseño</a></li>
	<!--actualizacion 1-04-13-->

	 </ul><!--SE INCORPORA EL MENU BASICO PARA EL USUARIO NORMAL QUE ACCEDA A LA PAGINA A CONSULTAR ALGUN LIBRO-->
<div id="mensaje">
DATOS ELIMINADOS CON EXITO
</div><!--CONTENIDO DE LA PAGINA UN POCO DE INFO-->
<div id="administrador"><!--FORMULARIO DE INICIAR SESION PARA EL ADMINISTRADOR-->
	<form method="post" action="" onsubmit="enviarDatosAdmin(); return false" name="admin">
	<table align="center">
	<tr><td colspan="2" align="center">Iniciar Sesión:</td></tr>
	<tr><td>Nombre</td><td><input type="text" name="Nombre" /></td></tr>
	<tr><td>Password</td><td><input type="password" name="pass" /></td></tr>
		<tr><td colspan="2" align="center"><div id="resultado"></div></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Entrar" /></td></tr>
</table>
</form>
</div>
<div id="formcontact">
</div>
<?php } ?> <!--CERRAMOS LA CONDICION EN PHP-->
<footer id="pie">Departamento de Informatica © 2014 · V 1.0</footer>
<footer id="pie">Design and Programing by: Kelo González</footer>

</body>
</html><!--CERRAMOS LA PAGINA HTML-->
