<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset = 'utf-8'>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de Locales</title>
<link rel="stylesheet" href="maqueta.css" type="text/css">
<script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
<div id="ImgPan"><a href="index.php"><img src="images/logo.png"  width="400" height="100"  border="0" /></a> </div>
<ul class="Menuprin">
		<li><a href="index.php">Inicio</a></li>
    <li><a href="#">Registrar</a>
     <ul>
    <!--<li><a href="usuario.php">Usuarios</a></li>-->
		<li><a href="libro.php">Locales</a></li>
	<!--	<li><a href="prestamo.php">Prestamos</a></li>-->
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

<div id="formcontact">
<!--onsubmit es para que al presionar el boton guardar nos lleve a la funcion enviarDatosLibro que esta en ajax.js y asi poder registrar -->
<form method="post" action="" onsubmit="enviarDatosLibro(); return false" name="registro_libro">
	<table align="center">
	<tr><td colspan="2" align="center"><h3>Registro de Locales</h3></td></tr>
	<tr><td>Cédula de Identidad</td><td><input type="text" name="cedula" /></td></tr>
	<tr><td>Nombres y Apellidos</td><td><input type="text" name="nombres" /></td></tr>
	<tr><td>Calle Principal&nbsp&nbsp
	<SELECT NAME="ubicacion" SIZE="1"> 
   	<OPTION VALUE="10 de Agosto">10 de Agosto</OPTION> 
   	<OPTION VALUE="S/N">S/N</OPTION>
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
	</td>
	</tr>
	<tr><td>Calle Secundaria&nbsp&nbsp
	<SELECT NAME="ubicacion2" SIZE="1"> 
   	<OPTION VALUE="10 de Agosto">10 de Agosto</OPTION> 
   	<OPTION VALUE="S/N">S/N</OPTION>
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
	</td>
	</tr>
	<tr><td>Razón Social</td><td><input type="text" name="razon" /></td></tr>
	<tr><td>Permiso&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<SELECT NAME="permiso" SIZE="1"> 
   	<OPTION VALUE="Si">Si</OPTION> 
   	<OPTION VALUE="No">No</OPTION> 
   	</SELECT>
	</td>
	</tr>
	<tr><td>Local&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<SELECT NAME="propietario" SIZE="1"> 
   	<OPTION VALUE="Propio">Propio</OPTION> 
   	<OPTION VALUE="Alquilado">Alquilado</OPTION> 
   	</SELECT>
	</td>
	</tr>
	<tr><td>Recaudación</td><td><input type="text" name="valor" /></td></tr>
	<tr><td colspan="2" align="center"><input type="submit" value="Guardar" /></td></tr>
	<tr><td colspan="2" align="center"><div id="resultado"></div></td></tr>
 	<tr> <td colspan="2" align="center" ><a href="javascript:history.back(1)">Volver Atras</a></td></tr>
</table>
</form>
</div>
<footer id="pie">Departamento de Informatica © 2014 · V 1.0</footer>
<footer id="pie">Design and Programing by: Kelo González</footer>

</body>
</html>