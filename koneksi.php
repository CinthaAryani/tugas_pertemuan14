<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cinta";

$conn = mysqli_connect($host,$user,$pass,$db);

if ($conn == false)
{
echo "Koneksi ke server gagal.";
die();
}

?>