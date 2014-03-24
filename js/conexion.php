<?php
$host="127.0.0.1";
$usuario="root";
$base="locales";
$conectar=mysql_connect($host,$usuario) or die("Sin Conexion");
$exito=mysql_select_db($base, $conectar) or die("Error en la base de datos");
?>