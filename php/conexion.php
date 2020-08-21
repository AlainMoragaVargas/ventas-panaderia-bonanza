<?php


$servidor="localhost";
$usuario="root";
$password="1234";
$bd="ventas_bonanza"; 

$dbconn=mysqli_connect($servidor,$usuario,$password,$bd);

if (!$dbconn) {
	echo "".mysql_connect_error();
}


?>