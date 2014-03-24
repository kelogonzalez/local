<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de Usuarios</title>
<link rel="stylesheet" href="maqueta.css" type="text/css">
<script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
<div id="ImgPan"><a href="index.php"><img src="images/logo.png"  width="160" height="80"  border="0" /></a> </div>
		<ul class="Menuprin">
		<li><a href="index.php">Inicio</a></li>
    <li><a href="#">Registrar</a>
     <ul>
    <li><a href="usuario.php">Usuarios</a></li>
		<li><a href="libro.php">Libros</a></li>
		<li><a href="prestamo.php">Prestamos</a></li>
	</ul></li>
		<li><a href="#">Actualizar</a>
		<ul>
		<li><a href="cambios.php">Usuario</a></li>
		<li><a href="cambios_lib.php">Libros</a></li>
		<li><a href="entrega.php">Entregas</a></li>
		</ul></li>
		<li><a href="#">Busquedas</a>
		<ul>
		<li><a href="bu_tit.php">Titulo</a></li>
		<li><a href="bu_aut.php">Autor</a></li>
		<li><a href="bu_edit.php">Editorial</a></li>
		<li><a href="bu_prestamo.php">Prestamos</a></li>
	</ul></li>
	<li><a href="javascript:DesplegarContac();">Contacto</a></li><!--Aqui cambiamos "return false", ya que el navegador Firefox no acepta retorno a falso-->
		<li><a href="salir.php">Cerrar Sesion</a></li>
	 </ul>	
<div id="formcontact">
<!--onsubmit es para que al presionar el boton guardar nos lleve a la funcion enviarDatosUsuario que esta en ajax.js y asi poder registrar -->
<form method="post" action="" onsubmit="enviarDatosUsuario(); return false" name="registro_usuario">
	<table align="center">
	<tr><td colspan="2" align="center"><h3>Registro de Usuarios</h3></td></tr>
	<tr><td>CURP</td><td><input type="text" name="curp" /></td></tr>
	<tr><td>Nombre</td><td><input type="text" name="Nombre" /></td></tr>
	<tr><td>Apellidos</td><td><input type="text" name="Apellido" /></td></tr>
	<tr><td>Grado</td><td><input type="text" name="Grado" /></td></tr>
	<tr><td>Grupo</td><td> <input type="text" name="Grupo" /></td></tr>
	<tr><td>Direccion</td><td><input type="text" name="Direccion" /></td></tr>
	<tr><td>Telefono</td><td><input type="text" name="Telefono" /></td></tr>
	<tr><td colspan="2" align="center"><input type="submit" value="Guardar" /></td></tr>
	<tr><td colspan="2" align="center"><div id="resultado"></div></td></tr>
 	<tr> <td colspan="2" align="center" ><a href="javascript:history.back(1)">Volver Atras</a></td></tr>
</table>
</form>
</div>
</body>
</html>
