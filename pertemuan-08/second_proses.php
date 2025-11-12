<?php
 session_start();
        $sesnama = $_SESSION["Nama Lengkap"];
        $sesnim = $_SESSION["NIM"];
        $sestempatlahir = $_SESSION["Tempat Lahir"];
        $sestanggallahir = $_SESSION["Tanggal Lahir"];
        $seshobi = $_SESSION["Hobi"];
        $sespasangan = $_SESSION["Pasangan"];
        $sespekerjaan = $_SESSION["Pekerjaan"];
        $sesnamaortu = $_SESSION["Nama Orang Tua"];
        $sesnamakakak = $_SESSION["Nama Kakak"];
        $sesnamaadik = $_SESSION["Nama Adik"];
header("location: index.php");
?>