<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  /*
    Ambil nilai cid dari GET dan lakukan validasi untuk 
    mengecek cid harus angka dan lebih besar dari 0 (> 0).
    'options' => ['min_range' => 1] artinya cid harus ≥ 1 
    (bukan 0, bahkan bukan negatif, bukan huruf, bukan HTML).
  */
  $cid = filter_input(INPUT_GET, 'cid', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
  ]);
  /*
    Skrip di atas cara penulisan lamanya adalah:
    $cid = $_GET['cid'] ?? '';
    $cid = (int)$cid;

    Cara lama seperti di atas akan mengambil data mentah 
    kemudian validasi dilakukan secara terpisah, sehingga 
    rawan lupa validasi. Untuk input dari GET atau POST, 
    filter_input() lebih disarankan daripada $_GET atau $_POST.
  */

  /*
    Cek apakah $cid bernilai valid:
    Kalau $cid tidak valid, maka jangan lanjutkan proses, 
    kembalikan pengguna ke halaman awal (read.php) sembari 
    mengirim penanda error.
  */
  if (!$cid) {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('read.php');
  }

  /*
    Ambil data lama dari DB menggunakan prepared statement, 
    jika ada kesalahan, tampilkan penanda error.
  */
  $stmt = mysqli_prepare($conn, "SELECT cid, cnim,cnama,ctempat, ctanggal,chobi, cpasangan, cpekerjaan, cortu, ckakak,cadik
                                    FROM tbl_pengunjung WHERE cid = ? LIMIT 1");
  if (!$stmt) {
    $_SESSION['flash_error'] = 'Query tidak benar.';
    redirect_ke('baca.php');
  }

  mysqli_stmt_bind_param($stmt, "i", $cid);
  mysqli_stmt_execute($stmt);
  $res = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_assoc($res);
  mysqli_stmt_close($stmt);

  if (!$row) {
    $_SESSION['flash_error'] = 'Record tidak ditemukan.';
    redirect_ke('baca.php');
  }

  #Nilai awal (prefill form)
  $nim = $row['cnim'] ?? '';
  $nama  = $row['cnama'] ?? '';
  $tempat = $row['ctempat'] ?? '';
  $tanggal = $row['ctanggal'] ?? '';
  $hobi = $row['chobi'] ?? '';
  $pasangan = $row['cpasangan'] ?? '';
  $pekerjaan = $row['cpekerjaan'] ?? '';
  $ortu = $row['cortu'] ?? '';
  $kakak = $row['ckakak'] ?? '';
  $adik = $row['cadik'] ?? '';

  #Ambil error dan nilai old input kalau ada
  $flash_error = $_SESSION['flash_error'] ?? '';
  $old = $_SESSION['old'] ?? [];
  unset($_SESSION['flash_error'], $_SESSION['old']);
  if (!empty($old)) {
    $nim = $old['nim'] ?? $nim;
    $nama = $old['nama'] ?? $nama;
    $tempat = $old['Tempat Lahir'] ?? $tempat;
    $tanggal = $old['Tanggal Lahir'] ?? $tanggal;
    $hobi = $old['Hobi'] ?? $hobi;
    $pasangan = $old['pasangan'] ?? $pasangan;
    $pekerjaan = $old['pekerjaan'] ?? $pekerjaan;
    $ortu = $old['Nama Orang Tua'] ?? $ortu;
    $kakak  = $old['Nama Kakak'] ?? $kakak;
    $adik = $old['Nama Adik'] ?? $adik;
  }
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h1>Ini Header</h1>
      <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
        &#9776;
      </button>
      <nav>
        <ul>
          <li><a href="#home">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section id="biodata">
      <h2>Biodata Sederhana Mahasiswa</h2>

       <?php if (!empty($flash_sukses)): ?>
        <div style="padding:10px; margin-bottom:10px; background:#d4edda; color:#155724; border-radius:6px;">
          <?= $flash_sukses; ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($flash_error)): ?>
        <div style="padding:10px; margin-bottom:10px; background:#f8d7da; color:#721c24; border-radius:6px;">
          <?= $flash_error; ?>
        </div>
      <?php endif; ?>

      <form action="process.php" method="POST">

        <label for="txtNim"><span>NIM:</span>
          <input type="text" id="txtNim" name="txtNim" placeholder="Masukkan NIM" 
          required autocomplete= "nim"
          value="<?= isset($old['nim']) ? htmlspecialchars($old['nim']) : '' ?>">
        </label>

        <label for="txtNmLengkap"><span>Nama Lengkap:</span>
          <input type="text" id="txtNmLengkap" name="txtNmLengkap" placeholder="Masukkan Nama Lengkap" 
          required autocomplete= "nama" 
           value="<?= isset($old['nama']) ? htmlspecialchars($old['nama']) : '' ?>">
        </label>

        <label for="txtT4Lhr"><span>Tempat Lahir:</span>
          <input type="text" id="txtT4Lhr" name="txtT4Lhr" placeholder="Masukkan Tempat Lahir" 
          required autocomplete="tempat"
           value="<?= isset($old['tempat']) ? htmlspecialchars($old['tempat']) : '' ?>">
        </label>

        <label for="txtTglLhr"><span>Tanggal Lahir:</span>
          <input type="text" id="txtTglLhr" name="txtTglLhr" placeholder="Masukkan Tanggal Lahir" 
          required autocomplete="tanggal"
           value="<?= isset($old['tanggal']) ? htmlspecialchars($old['tanggal']) : '' ?>">
        </label>

        <label for="txtHobi"><span>Hobi:</span>
          <input type="text" id="txtHobi" name="txtHobi" placeholder="Masukkan Hobi" 
          required autocomplete="hobi"
           value="<?= isset($old['hobi']) ? htmlspecialchars($old['hobi']) : '' ?>">
        </label>

        <label for="txtPasangan"><span>Pasangan:</span>
          <input type="text" id="txtPasangan" name="txtPasangan" placeholder="Masukkan Pasangan" 
          required autocomplete ="pasangan"
           value="<?= isset($old['pasangan']) ? htmlspecialchars($old['pasangan']) : '' ?>">>
        </label>

        <label for="txtKerja"><span>Pekerjaan:</span>
          <input type="text" id="txtKerja" name="txtKerja" placeholder="Masukkan Pekerjaan" 
          required autocomplete="pekerjaan"
           value="<?= isset($old['pekerjaan']) ? htmlspecialchars($old['pekerjaan']) : '' ?>">>
        </label>

        <label for="txtNmOrtu"><span>Nama Orang Tua:</span>
          <input type="text" id="txtNmOrtu" name="txtNmOrtu" placeholder="Masukkan Nama Orang Tua" 
          required autocomplete="ortu"
           value="<?= isset($old['ortu']) ? htmlspecialchars($old['ortu']) : '' ?>">>
        </label>

        <label for="txtNmKakak"><span>Nama Kakak:</span>
          <input type="text" id="txtNmKakak" name="txtNmKakak" placeholder="Masukkan Nama Kakak" 
          required autocomplete="kakak"
           value="<?= isset($old['kakak']) ? htmlspecialchars($old['kakak']) : '' ?>">>
        </label>

        <label for="txtNmAdik"><span>Nama Adik:</span>
          <input type="text" id="txtNmAdik" name="txtNmAdik" placeholder="Masukkan Nama Adik" 
          required autocomplete
           value="<?= isset($old['adik']) ? htmlspecialchars($old['adik']) : '' ?>">>
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>
    </section>


    </main>

    <script src="script.js"></script>
  </body>
</html>