<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Confirmacion</title>
<!--ES IMPORTANTE PONER EL ESTILO CSS LLAMADA maqueta.css ESTA DENTRO DE LA CARPETA DE LA PAGINA-->
<link rel="stylesheet" href="maqueta.css" type="text/css">
<script language="JavaScript" type="text/javascript" src="js/ajax.js"></script><!--SE INCORPORA EL SCRIPT AJAX-->
</head> <!--TERMINA DE INCORPORARSE LOS SCRIPT QUE NECESITA LA PAGINA PARA SU FUNCIONAMIENTO-->
<body>

<?php
	echo "Esta seguro que desea eliminar a ". $_REQUEST["nom"];

?>
<p><a href="delete.php?nom=<?php echo $_REQUEST["nom"];?>">Si</a> - <a href="javascript:history.go(-2)">No</p>
</body>
</html><!--CERRAMOS LA PAGINA HTML-->