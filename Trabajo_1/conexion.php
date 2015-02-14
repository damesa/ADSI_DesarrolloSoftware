<?php 

$conexion = mysql_connect('localhost','root','root');

mysql_select_db('supermercado');

$sql = "SELECT * FROM ventas"; 


$resultado = mysql_query($sql,$conexion);


$fila = mysql_fetch_array()
 ?>