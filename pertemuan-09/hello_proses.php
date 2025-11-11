<?php
session_start();
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
header("location: hello.php");
?>