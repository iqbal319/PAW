<?php
	//Koneksi Database
	$server = "localhost";
	$user = "root";
	$pass = "iqbal140103";
	$database = "iqbal";

	$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));
?>