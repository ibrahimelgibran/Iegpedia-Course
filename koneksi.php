<?php

	$server = 'localhost';
	$user = 'root';
	$password = 'root';
	$database = 'course';
	
	$koneksi = mysqli_connect($server, $user, $password, $database);

    if (!$koneksi){
        die("Gagal terhubung" . mysqli_connect_error());
    }