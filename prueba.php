<?php
include("js/conexion.php");
$con=mysql_connect($host,$usuario) or die("Problemas con el host");
mysql_select_db($base,$con) or die("Problemas con la Base");
$nombres=$_POST['nombres'];
$registro=mysql_query("SELECT id FROM registro WHERE id = '$nombres'",$con) or die("Problemas al realizar consulta:".mysql_error());

if ($reg=mysql_fetch_array($registro)) {
	
mysql_query("DELETE FROM registro WHERE id='$nombres'",$con) or die("Problemas al realizar consulta:".mysql_error());


echo " 
                <script language='JavaScript'> 
                alert('javaScript dentro de PHP'); 
                </script>";
header('Location:mensaje.php');


}else {
header('Location:no.php');
}


