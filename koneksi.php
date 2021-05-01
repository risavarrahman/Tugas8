<?php

$host       = "localhost"; // Nama host server
$username   = "root"; // Nama Username phpmyadmin
$password   = ""; // Password login phpmyadmin
$database   = "form_validasi"; // Nama Database

$koneksi = mysqli_connect($host, $username, $password, $database) or die ("Koneksi gagal");
mysqli_select_db($koneksi,$database) or die(mysqli_error());

?>