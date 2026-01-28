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
$kode      = bersihkan($_POST['txtKode']  ?? '');
$nama      = bersihkan($_POST['txtnama'] ?? '');
$alamat    = bersihkan($_POST['txtalamat'] ?? '');
$tanggal   = bersihkan($_POST['txttanggal'] ?? '');
$JJA       = bersihkan($_POST['txtJJA'] ?? '');
$prodi     = bersihkan($_POST['txtprodi'] ?? '');
$noHP      = bersihkan($_POST['txtnoHP'] ?? '');
$pasangan  = bersihkan($_POST['txtpasangan'] ?? '');
$anak      = bersihkan($_POST['txtanak'] ?? '');
$bidang    = bersihkan($_POST['txtbidang'] ?? '');


if ($kode === '') {
  $errors[] = 'kode wajib diisi.';
}

if ($nama === '') {
  $errors[] = 'Nama wajib diisi.';
}

if ($alamat === '') {
  $errors[] = 'alamat wajib diisi.';
}

if ($tanggal === '') {
  $errors[] = 'tanggal wajib diisi.';
}

if ($JJA === '') {
  $errors[] = 'wajib diisi.';
}

if ($prodi === '') {
  $errors[] = 'prodi wajib diisi.';
}

if ($noHP === '') {
  $errors[] = 'No HP wajib diisi.';
}

if ($pasangan === '') {
  $errors[] = 'Nama Pasangan wajib diisi.';
}

if ($anak === '') {
  $errors[] = 'Nama Anak wajib diisi.';
}

if ($bidang === '') {
  $errors[] = 'Bidang wajib diisi.';
}

if (mb_strlen($nama) < 3) {
  $errors[] = 'Nama minimal 3 karakter.';
}



/*
kondisi di bawah ini hanya dikerjakan jika ada error, 
simpan nilai lama dan pesan error, lalu redirect (konsep PRG)
*/
if (!empty($errors)) {
  $_SESSION['old'] = [
    'Kode'    => $kode,
    'Nama'    => $nama,
    'Alamat'  => $alamat,
    'Tanggal' => $tanggal,
    'JJA'     => $JJA,
    'Prodi'   => $prodi,
    'noHP'    => $noHP,
    'pasangan'=> $pasangan,
    'anak'    => $anak,
    'bidang'  => $bidang,
  ];

  $_SESSION['flash_error'] = implode('<br>', $errors);
  redirect_ke('index.php#contact');
}

#menyiapkan query INSERT dengan prepared statement
$sql = "INSERT INTO tbl_dosen (ckode, cnama, calmt, ctgl, cjja, chb, chp, pasangan, canak, cbidang) VALUES (?, ?, ?, ?, ?, ? ,?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
  #jika gagal prepare, kirim pesan error ke pengguna (tanpa detail sensitif)
  $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
  redirect_ke('index.php#contact');
}
#bind parameter dan eksekusi (s = string)
mysqli_stmt_bind_param($stmt, "ssssssssss",$kode, $nama, $alamat, $tanggal, $JJA, $prodi, $noHP, $pasangan, $anak, $bidang);

if (mysqli_stmt_execute($stmt)) { #jika berhasil, kosongkan old value, beri pesan sukses
  unset($_SESSION['old']);
  $_SESSION['flash_sukses'] = 'Terima kasih, data Anda sudah tersimpan.';
  redirect_ke('index.php#contact'); #pola PRG: kembali ke form / halaman home
} else { #jika gagal, simpan kembali old value dan tampilkan error umum
  $_SESSION['old'] = [
    'Kode'    => $kode,
    'Nama'    => $nama,
    'Alamat'  => $alamat,
    'Tanggal' => $tanggal,
    'JJA'     => $JJA,
    'Prodi'   => $prodi,
    'noHP'    => $noHP,
    'pasangan'=> $pasangan,
    'anak'    => $anak,
    'bidang'  => $bidang,
  ];
  $_SESSION['flash_error'] = 'Data gagal disimpan. Silakan coba lagi.';
  redirect_ke('index.php#contact');
}
#tutup statement
mysqli_stmt_close($stmt);

$arrBiodata = [
  "kodedos" => $_POST["txtKodeDos"] ?? "",
  "nama" => $_POST["txtNmDosen"] ?? "",
  "alamat" => $_POST["txtAlRmh"] ?? "",
  "tanggal" => $_POST["txtTglDosen"] ?? "",
  "jja" => $_POST["txtJJA"] ?? "",
  "prodi" => $_POST["txtProdi"] ?? "",
  "nohp" => $_POST["txtNamaPasangan"] ?? "",
  "pasangan" => $_POST["txNamaPasangan"] ?? "",
  "anak" => $_POST["txtNmAnak"] ?? "",
  "ilmu" => $_POST["txtBidangIlmu"] ?? ""
];
$_SESSION["biodata"] = $arrBiodata;

header("location: index.php#biodata");
