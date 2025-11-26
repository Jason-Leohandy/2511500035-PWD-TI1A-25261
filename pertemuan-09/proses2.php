<?php
session_start();
$sesnama = $_POST["txtNama"];
$sesemail = $_POST["txtEmail"];
$sespesan = $_POST["txtPesan"];
$_SESSION["sesnama"] = $sesnama;
$_SESSION["sesemail"] = $sesemail;
$_SESSION["sespesan"] = $sespesan;

$arrKontak = [
"nama" => $_POST["txtNama"] ?? "",
"email" => $_POST["txtEmail"] ?? "",
"pesan" => $_POST["txtPesan"] ?? "",
];
$_SESSION["Kontak"] = $arrKontak;
header("location: index.php#Kontak");
?>