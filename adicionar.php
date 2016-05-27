<?php

// incluir el archivo de conexion 
include("conexion.php");
// establecer conexion con el servidor 
$con = mysql_connect($host,$user,$pw) or die("Problemas al conectar el servidor");

// seleccionar la base de datos 
mysql_select_db($bd,$con) or die("Problemas al seleccionar la base de datos");

// hacer la consulta que puede ser adicionar, seleccionar, modificar, listar 
mysql_query("INSERT INTO tabla1('nombre','pw') VALUES('$_POST[nombre]','$_POST[pw]')");
echo "Datos insertados de manera correcta";




?>