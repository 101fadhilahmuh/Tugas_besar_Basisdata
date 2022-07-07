<?php 

define('SERVERNAME', 'localhost');
define('HOSTNAME', 'root');
define('PASSWORD', '');
define('DATABASE', '');

$MySQl = new MySQLi(SERVERNAME,HOSTNAME,PASSWORD,DATABASE);

if ($MySQl->connect_error) {
	echo "Gagal koneksi database MySQL : ";
	echo $MySQl->connect_error;
}

 ?>