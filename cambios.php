<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Actualizar Usuario</title>
<!--ES IMPORTANTE PONER EL ESTILO CSS LLAMADA maqueta.css ESTA DENTRO DE LA CARPETA DE LA PAGINA-->
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
		<li><a href="bu_edit.php">Prestamos</a></li>
	</ul></li> <!--INCORPORACION DEL MENU PRINCIPAL QUE SERVIRA PARA ADMINISTRAR EL CONTENIDO DE LOS USUARIOS, LIBROS Y PRESTAMOS-->
	<li><a href="javascript:DesplegarContac();">Contacto</a></li><!--Aqui cambiamos "return false", ya que el navegador Firefox no acepta retorno a falso-->
		<li><a href="salir.php">Cerrar Sesion</a></li>
	 </ul>
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
$dir=$row[5];
$tel=$row[6];
if(mysql_num_rows($busca))
 {   
 	$datos=mysql_fetch_row($busca);
	echo "<form method='POST' action='' onsubmit='modificarDatosUsuario(); return false' name='formulario'>
		<center><h3>Modifica los Datos Del Formulario</h3><br>
		<table><tr><td>
		CURP:</td> <td><input type='text' name='curp' readonly='readonly' value='".$cu."'> <br></td></tr>
		<tr><td>Nombre</td> <td><input type='text' name='Nombre' value='".$nom."'> <br></td></tr>
		<tr><td>Apellidos</td> <td><input type='text' name='Apellido' value='".$ape."'><br></td></tr>
		<tr><td>Grado</td> <td><input type='text' name='Grado' value='".$gra."'> <br></td></tr>
		<tr><td>Grupo</td> <td><input type='text' name='Grupo' value='".$gru."'><br></td></tr>
		<tr><td>Direccion</td> <td><input type='text' name='Direccion' value='".$dir."'><br></td></tr>
		<tr><td>Telefono</td> <td><input type='text' name='Telefono' value='".$tel."'><br></td></tr>
		<tr><td><input type='submit' value='Guardar' name='enviarDatos'/></td></tr>
        <tr><td colspan='2' align='center'><div id='resultado'></div></td></tr>
		<tr><td colspan='2' align='center' ><a href='javascript:history.back(1)'>Seguir Buscando</a></td></tr>
        </form></table></center>    ";
 }
 else echo "No se Encontro La CURP del Usuario";
  		

} else {
?>
<div id="busqueda">
<center>
<form name="cambios" action="cambios.php" method="POST">
Busca al Usuario por su CURP : <input type="text" name="curp" /><br>
<input type="submit" value="Buscar" name="enviar" />
 <tr><td colspan='2' align='center'><div id='resultado'></div></td></tr>
</form>
</center>
<?php
}
?>
</div>
</div>
</body>
</html>