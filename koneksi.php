<?php
$server = "localhost";
$user = "id14315663_kelompok3";
$password = "@hNUoEf7iHPa=B|p";
$dbname = "id14315663_bantuan_covid";
$db = mysqli_connect($server, $user, $password, $dbname);
if (!$db) {
	die("Gagal Terhubung ke database:" . mysqli_connect_error());
}
