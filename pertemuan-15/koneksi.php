<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_pwd2025";
$db  = "Tryout_pwd2026";

$conn = mysqli_connect($host, $user, $pass, $db ,$db2);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

