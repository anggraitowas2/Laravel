<?php 
session_start();
session_regenerate_id(true);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "Stardom";

	$connection = mysqli_connect($host, $user, $pass, $db);

	if(!$connection) {
		die("Koneksi Gagal : ".mysql_connect_error());
	}
?>