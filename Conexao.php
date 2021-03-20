<?php
$serverName = "PC-JOAO\SQLEXPRESS";
$connectionInfo = array("Database"=>"aula_sql");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if($conn)
{
	echo("Conectado");
}
else
{
	echo("Não Conectado");
	die(print_r(sqlsrv_errors(), true));
}
?>