<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset ='utf-8'>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Eliminación Por Ubicación</title>
<link rel="stylesheet" href="maqueta.css" type="text/css">
<script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
<div id="ImgPan"><a href="index.php"><img src="images/logo.png"  width="400" height="100"  border="0" /></a> </div>
	<?php 
	session_start();
	if (isset($_SESSION['Administrador'])) {
		# code...
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
	<li><a href="export.php">Reporte</a>
		<li><a href="salir.php">Cerrar Sesión</a></li>
	 </ul>
	<?php
	} else {?>
	<ul class="Menuinvitado">
		<li><a href="index.php">Inicio</a></li>
 		<li><a href="#">Busqueda</a>
		<ul>
		<li><a href="bu_tit.php">Por Cédula</a></li>
		<li><a href="bu_aut.php">Por Nombres</a></li>
		<li><a href="bu_edit.php">Por Ubicación</a></li>
		<li><a href="bu_per.php">Por Permiso</a></li>
		<!--<li><a href="bu_prestamo.php">Prestamos</a></li>-->
	</ul></li>
	
	 </ul>
<?php 
} ?>
<div id="formcontact">
<?php
if(isset($_POST['enviar']))	//Aqui el codigo PHP Y REVISAMOS SI NO "PINCHARON EL BOTON DE BUSCAR DEL FORMULARIO QUE ESTA MAS ABAJO DEL CODIGO"
 {
 	include("js/conexion.php"); // Conectar con MySQL(Este archivo esta en la carpeta js, se utiliza para realizar la conexion a MySQL y A LA BD)
 	$ubicacion=$_POST['ubicacion'];//Sacamos de la variable POST y lo almacenamos en la veriable $tit
	$buscar=mysql_query("SELECT * FROM registro WHERE ubicacion LIKE '%$ubicacion%'"); //Busqueda por medio de fecha(CONSULTA MYSQL)
	if($buscar){ //SI ENCUENTRA RESULTADO EN LA CONSULTA MySQL
	?>
	
<div id="tabla_pres"> <!--INICIAMOS EN HTML UNA TABLA PARA POSTEAR LOS RESULTADOS DE LA CONSULTA(busqueda)-->
 <table>
<tr bgcolor="#1882ad"><td><font color="white">ID</font></td><td><font color="white">Cédula</font></td><td><font color="white">Nombres</font></td><td><font color="white">Principal</font></td><td><font color="white">Secundaria</font></td><td><font color="white">Razón Social</font></td></tr>
<?php
while ($row_mostrar_seleccion_c = mysql_fetch_assoc($buscar)){ /*EN UN BUCLE WHILE ACOMODAMOS EN 
LA TABLA LOS RESULTADOS OBTENIDOS DE LA CONSULTA JUNTO CON LA FUNCION mysql_fetch_assoc*/
  ?>
<tr>
<td align="center"><?php echo $row_mostrar_seleccion_c['id'] ?></td> <!--AQUI ACOMODAMOS LOS REGISTROS QUE ESTEN EN LA TABLA libros-->
<td align="center"><?php echo $row_mostrar_seleccion_c['cedula'] ?></td> <!--AQUI ACOMODAMOS LOS REGISTROS QUE ESTEN EN LA TABLA libros-->
<td align="center"><?php echo $row_mostrar_seleccion_c['nombres'] ?></td>
<td align="center"><?php echo $row_mostrar_seleccion_c['ubicacion'] ?></td>
<td align="center"><?php echo $row_mostrar_seleccion_c['ubicacion2'] ?></td>
<td align="center"><?php echo $row_mostrar_seleccion_c['razon'] ?></td>
<?php } ?>


<tr><td colspan='2' align='center' ><a href='javascript:history.back(1)'>Seguir Buscando</a></td></tr><!--Codigo javascript para poner un link de regresar-->
</table>

<form action= "prueba.php" method="post" name="form"> 
Ingresar el ID a ser borrado<input type="text" name="nombres" />
<input type="submit" value="Borrar" /></a>
</div>
  <?php
  } else{echo "No se Encontraron Resultados";} 
} else {  

?>

<div id="busqueda">
<center>
	<h3>Busqueda</h3>
<form name="cambios" action="bu_eli_fe.php" method="POST"> <!--!ESTE ES OTRO FOMULARIO DONDE REALIZAREMOS LA BUSQUEDA POR TITULO-->
Ubicación 
<SELECT NAME="ubicacion" SIZE="1"> 
   	<OPTION VALUE="10 de Agosto">10 de Agosto</OPTION> 
   	<OPTION VALUE="Guayaquil">Guayaquil</OPTION> 
   	<OPTION VALUE="Cuenca">Cuenca</OPTION> 
   	<OPTION VALUE="Bolivar">Bolivar</OPTION> 
   	<OPTION VALUE="Pastaza">Pastaza</OPTION> 
   	<OPTION VALUE="Tarqui">Tarqui</OPTION> 
   	<OPTION VALUE="7 de Noviembre">7 de Noviembre</OPTION> 
   	<OPTION VALUE="Eugenio Espejo">Eugenio Espejo</OPTION> 
   	<OPTION VALUE="Panamericana">Panamericana</OPTION> 
   	<OPTION VALUE="Av. Olmedo">Av. Olmedo</OPTION> 
   	<OPTION VALUE="Emilio González">Emilio González</OPTION> 
   	<OPTION VALUE="24 de Mayo">24 de Mayo</OPTION> 
   	<OPTION VALUE="15 de Octubre">15 de Octubre</OPTION> 
   	<OPTION VALUE="H. González">H. González</OPTION> 
   	<OPTION VALUE="J. Roldos">J. Roldos</OPTION> 
   	<OPTION VALUE="E. MOra">E. Mora</OPTION> 
   	<OPTION VALUE="Av. H. Castro">Av. H. Castro</OPTION> 
    </SELECT>




<br>
<input type="submit" value="Buscar" name="enviar"/><!--ESTE ES EL BOTON DE BUSCAR-->
</form>
</center>
<?php } ?>
</div>
</div>
<footer id="pie">Departamento de Informatica © 2014 · V 1.0</footer>
<footer id="pie">Design and Programing by: Kelo González</footer>

</body>
</html>