<?php
session_start();
$_SESSION["Nama Lengkap"] = $_POST["Nama_Lengkap"];
$_SESSION["Nim"] = $_POST["Nim"];
$_SESSION["Tempat Lahir"] = $_POST["Tempat_Lahir"];
$_SESSION["Tanggal lahir"] = $_POST["Tanggal_Lahir"];
$_SESSION["Hobi"] = $_POST["Hobi"];
$_SESSION["Pasangan"] = $_POST["Pasangan"];
$_SESSION["Pekerjaan"] = $_POST["Pekerjaan"];
$_SESSION["Nama Orang Tua"] = $_POST["Nama_Orang_Tua"];
$_SESSION["Nama Kakak"] = $_POST["Nama_Kakak"];
$_SESSION["Nama Adik"] = $_POST["Nama_Adik"];
header("location: index.php");
?>
$_SESSION["nama lengkap"] = $_POST["nama_lengkap"];
$_SESSION["nim"] = $_POST["nim"];
$_SESSION["tempat lahir"] = $_POST["tempat_lahir"];
$_SESSION["tanggal lahir"] = $_POST["tanggal_lahir"];
$_SESSION["hobi"] = $_POST["hobi"];
$_SESSION["pasangan"] = $_POST["pasangan"];
$_SESSION["pekerjaan"] = $_POST["pekerjaan"];
$_SESSION["nama orang tua"] = $_POST["nama_orang_tua"];
$_SESSION["nama kakak"] = $_POST["nama_kakak"];
$_SESSION["nama adik"] = $_POST["nama_adik"];