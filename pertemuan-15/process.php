<?php
session_start();
require __DIR__ . './koneksi.php';
require_once __DIR__ . '/fungsi.php';

#cek method form, hanya izinkan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error'] = 'Akses tidak valid.';
  redirect_ke('index.php#biodata');
}

#ambil dan bersihkan nilai dari form
$nim       = bersihkan($_POST['txtNim']  ?? '');
$nama      = bersihkan($_POST['txtNmLengkap'] ?? '');
$tempat    = bersihkan($_POST['txtT4Lhr'] ?? '');
$tanggal   = bersihkan($_POST['txtTgllhr'] ?? '');
$hobi      = bersihkan($_POST['txtHobi'] ?? '');
$pasangan  = bersihkan($_POST['txtPasangan'] ?? '');
$pekerjaan = bersihkan($_POST['txtKerja'] ?? '');
$ortu      = bersihkan($_POST['txtNmOrtu'] ?? '');
$kakak     = bersihkan($_POST['txtNmKakak'] ?? '');
$adik      = bersihkan($_POST['txtNmAdik'] ?? '');
  

#Validasi sederhana
$errors = []; #ini array untuk menampung semua error yang ada

if ($nim= '') {
  $errors[] = 'Nim Wajib Diisi.';
}

if ($nama === '') {
  $errors[] = 'Nama wajib diisi.';
}

if ($tempat === '') {
  $errors[] = 'Tempat lahir wajib diisi.';
}


if ($tanggal  === '') {
  $errors[] = 'Tanggal lahir wajib diisi.';
}

if ($hobi === '') {
  $errors[] = 'Hobi wajib diisi.';
}

if ($pasangan === '') {
  $errors[] = 'Pasangan wajib diisi.';
}

if ($pekerjaan === '') {
  $errors[] = 'pekerjaan wajib diisi wajib diisi.';
}

if ($ortu === '') {
  $errors[] = 'Nama ortu wajib diisi.';
}

if ($kakak === '') {
  $errors[] = 'Nama kakak wajib diisi.';
} 

if ($adik === '') {
  $errors[] = 'Nama adik wajib diisi.';
} 



/*
kondisi di bawah ini hanya dikerjakan jika ada error, 
simpan nilai lama dan pesan error, lalu redirect (konsep PRG)
*/
if (!empty($errors)) {
  $_SESSION['old'] = [
    'nim'   => $nim,
    'nama'  => $nama,
    'Tempat lahir' => $tempat,
    'Tanggal lahir' => $tanggal,
    'Hobi'   => $hobi,
    'Pasangan'   => $pasangan,
    'Pekerjaan'   => $pekerjaan,
    'Nama Orang Tua'   => $ortu,
    'Nama kakak'   => $kakak, 
    'Nama Adik'   => $adik,
    'captcha' => $captcha
  ];

  $_SESSION['flash_error'] = implode('<br>', $errors);
  redirect_ke('index.php#biodata');
}

#menyiapkan query INSERT dengan prepared statement
$sql = "INSERT INTO tbl_pengunjung (cnim, cnama, ctempat, ctanggal, chobi, cpasangan, cpekerjaan, cortu, ckakak, cadik) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?.)";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
  #jika gagal prepare, kirim pesan error ke pengguna (tanpa detail sensitif)
  $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
  redirect_ke('index.php');
}
#bind parameter dan eksekusi (s = string)
mysqli_stmt_bind_param($stmt, "ssssssssss", $nim, $nama, $tempat,$tanggal, $hobi, $pasangan, $pekerjaan, $ortu, $kakak, $adik);

if (mysqli_stmt_execute($stmt)) { #jika berhasil, kosongkan old value, beri pesan sukses
  unset($_SESSION['old']);
  $_SESSION['flash_sukses'] = 'Terima kasih, data Anda sudah tersimpan.';
  redirect_ke('index.php'); #pola PRG: kembali ke form / halaman home
} else { #jika gagal, simpan kembali old value dan tampilkan error umum
  $_SESSION['old'] = [
    'nim'   => $nim,
    'nama'  => $nama,
    'tempat' => $tempat,
    'tanggal' => $tanggal,
    'Hobi'   => $hobi,
    'pasangan'   => $pasangan,
    'pekerjaan'   => $pekerjaan,
    'ortu'   => $ortu,
    'kakak'   => $kakak,
    'adik'   => $adik,
  ];
  $_SESSION['flash_error'] = 'Data gagal disimpan. Silakan coba lagi.';
  redirect_ke('index.php');
}
#tutup statement
mysqli_stmt_close($stmt);

$arrBiodata = [
  "nim" => $_POST["txtNim"] ?? "",
  "nama" => $_POST["txtNmLengkap"] ?? "",
  "tempat" => $_POST["txtT4Lhr"] ?? "",
  "tanggal" => $_POST["txtTglLhr"] ?? "",
  "hobi" => $_POST["txtHobi"] ?? "",
  "pasangan" => $_POST["txtPasangan"] ?? "",
  "pekerjaan" => $_POST["txtKerja"] ?? "",
  "ortu" => $_POST["txtNmOrtu"] ?? "",
  "kakak" => $_POST["txtNmKakak"] ?? "",
  "adik" => $_POST["txtNmAdik"] ?? ""
];
$_SESSION["biodata"] = $arrBiodata;


header("location: index.php");