<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Busqueda por Prestamos</title>
<link rel="stylesheet" href="maqueta.css" type="text/css">
<link rel="stylesheet" href="maqueta.css" type="text/css">
<script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
<div id="ImgPan"><a href="index.php"><img src="images/logo.png"  width="160" height="80"  border="0" /></a> </div>
<?php 
	session_start();
	if (isset($_SESSION['Administrador'])) {
		# code...
?>
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
	<?php
	} else {?>
	<ul class="Menuinvitado">
		<li><a href="index.php">Inicio</a></li>
 		<li><a href="#">Busqueda</a>
		<ul>
		<li><a href="bu_tit.php">Titulo</a></li>
		<li><a href="bu_aut.php">Autor</a></li>
		<li><a href="bu_edit.php">Editorial</a></li>
		<li><a href="bu_prestamo.php">Prestamos</a></li>
	</ul></li>
	<li><a href="javascript:DesplegarContac();">Contacto</a></li><!--Aqui cambiamos "return false", ya que el navegador Firefox no acepta retorno a falso-->
	 </ul>
<?php 
} ?>
<div id="formcontact">
<?php
if(isset($_POST['enviar']))	
 {
include("js/conexion.php"); // Conectar con MySQL
$busca=mysql_query("SELECT * FROM usuarios WHERE curp='".$_POST['curp']."'"); //Busqueda por medio de la CURp
$cu=$_POST['curp'];
$row = @mysql_fetch_array($busca); //Arreglo
$nom=$row[1];
$ape=$row[2];
$gra=$row[3];
$gru=$row[4];
if(mysql_num_rows($busca))
 {   
 	$datos=mysql_fetch_row($busca);
	echo "<form method='post' action='' onsubmit='enviarDatosPrestamo(); return false' name='registro_prestamo'>
		<center><b><h3>Prestamo de Libros</h3></b><br>
		<table><tr><td>
		CURP:</td> <td><input type='text' name='curp' readonly='readonly' value='".$cu."'> <br></td></tr>
		<tr><td>Nombre</td> <td><input type='text' name='Nombre' readonly='readonly' value='".$nom."'> <br></td></tr>
		<tr><td>Apellidos</td> <td><input type='text' name='Apellido' readonly='readonly' value='".$ape."'><br></td></tr>
		<tr><td>Grado</td> <td><input type='text' name='Grado' readonly='readonly' value='".$gra."'> <br></td></tr>
		<tr><td>Grupo</td> <td><input type='text' name='Grupo' readonly='readonly' value='".$gru."'><br></td></tr>
		<tr><td colspan='2' align='center' ><a href='javascript:history.back(1)'>Seguir Buscando</a></td></tr>
        <tr><td colspan='2' align='center'><div id='resultado'></div></td></tr>
        </form></table></center>";
 $seleccionar_c = "SELECT * FROM libros join prestamos on libros.Codigo=prestamos.Codigo and prestamos.curp='$cu' AND prestamos.Fecha_prestamo=''";
$mostrar_c= mysql_query($seleccionar_c, $conectar) or die('Capture El Codigo del Libro');
?>
<div id="tabla_pres">
 <table align="center">
<tr bgcolor="#8B0000" align="center"><td><font color="white">Codigo</font></td><td><font color="white">Titulo</font></td><td><font color="white">Autor</font></td><td><font color="white">Editorial</font></td></tr>
<?php
while ($row_mostrar_seleccion_c = mysql_fetch_assoc($mostrar_c)){
  ?>
<tr>
<td align="center"><?php echo $row_mostrar_seleccion_c['Codigo'] ?></td>
<td align="center"><?php echo $row_mostrar_seleccion_c['Titulo'] ?></td>
<td align="center"><?php echo $row_mostrar_seleccion_c['Autor'] ?></td>
<td align="center"><?php echo $row_mostrar_seleccion_c['Editorial'] ?></td>
<td align="center"><?php echo $row_mostrar_seleccion_c['Fecha_prestamo'] ?></td>
<?php }?>
</table>
</div>
<?php
 }
 else echo "No se Encontro La CURP del Usuario";
 } else {
?>
<center>
<form name="cambios" action="bu_prestamo.php" method="POST">
Busca al Usuario por su CURP : <input type="text" name="curp"/><br>
<input type="submit" value="Buscar" name="enviar"/>
</form>
</center>
<?php
} ?>
</div>
</body>
</html>