<?php
  session_start();
  require __DIR__ . '/koneksi.php';
  require_once __DIR__ . '/fungsi.php';

  #cek method form, hanya izinkan POST
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('read copy.php');
  }

  #validasi cid wajib angka dan > 0
  $cid = filter_input(INPUT_POST, 'cid', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
  ]);

  if (!$cid) {
    $_SESSION['flash_error'] = 'CID Tidak Valid.';
    redirect_ke('edit.php?cid='. (int)$cid);
  }

  #ambil dan bersihkan (sanitasi) nilai dari form
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

  #Validasi sederhana
  $errors = []; #ini array untuk menampung semua error yang ada


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
    redirect_ke('edit.php?cid='. (int)$cid);
  }

  /*
    Prepared statement untuk anti SQL injection.
    menyiapkan query UPDATE dengan prepared statement 
    (WAJIB WHERE cid = ?)
  */
  $stmt = mysqli_prepare($conn, "UPDATE tbl_dosen 
                                SET ckode = ?, cnama = ?, calmt = ? , ctgl = ?, cJJA = ?, chb = ?, chp = ?, cpasangan = ?, canak = ?, cbidang = ?
                                WHERE cid = ?");
  if (!$stmt) {
    #jika gagal prepare, kirim pesan error (tanpa detail sensitif)
    $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
    redirect_ke('edit.php?cid='. (int)$cid);
  }

  #bind parameter dan eksekusi (s = string, i = integer)
  mysqli_stmt_bind_param($stmt, "sssi", $nama, $email, $pesan, $cid);

  if (mysqli_stmt_execute($stmt)) { #jika berhasil, kosongkan old value
    unset($_SESSION['old']);
    /*
      Redirect balik ke read.php dan tampilkan info sukses.
    */
    $_SESSION['flash_sukses'] = 'Terima kasih, data Anda sudah diperbaharui.';
    redirect_ke('read.php'); #pola PRG: kembali ke data dan exit()
  } else { #jika gagal, simpan kembali old value dan tampilkan error umum
    $_SESSION['old'] = [
      'nama'  => $nama,
      'email' => $email,
      'pesan' => $pesan,
    ];
    $_SESSION['flash_error'] = 'Data gagal diperbaharui. Silakan coba lagi.';
    redirect_ke('edit.php?cid='. (int)$cid);
  }
  #tutup statement
  mysqli_stmt_close($stmt);

  redirect_ke('edit.php?cid='. (int)$cid);