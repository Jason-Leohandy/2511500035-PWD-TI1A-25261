<?php
session_start();

$sesnama = "";
if (isset($_SESSION["sesnama"])):
  $sesnama = $_SESSION["sesnama"];
endif;

$sesemail = "";
if (isset($_SESSION["sesemail"])):
  $sesemail = $_SESSION["sesemail"];
endif;

$sespesan = "";
if (isset($_SESSION["sespesan"])):
  $sespesan = $_SESSION["sespesan"];
endif;
?>

<!DOCTYPE html>
<html lang="en">

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
    <section id="home">
      <h2>Selamat Datang</h2>
      <?php
      echo "halo dunia!<br>";
      echo "nama saya hadi";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>

<section id="handling_form" class="section">
    <h2>Pendaftaran Profil Pengunjung</h2>
    <form action="proses.php" method="POST">
      <label>NIM</label>
      <input type="text" name="nim" required>

      <label>Nama Lengkap</label>
      <input type="text" name="nama" required>

      <label>Tempat Lahir</label>
      <input type="text" name="tempat" required>

      <label>Tanggal Lahir</label>
      <input type="date" name="tgl" required>

      <label>Hobi</label>
      <input type="text" name="hobi">

      <label>Pasangan</label>
      <input type="text" name="pasangan">

      <label>Pekerjaan</label>
      <input type="text" name="pekerjaan">

      <label>Nama Orang Tua</label>
      <input type="text" name="ortu">

      <label>Nama Kakak</label>
      <input type="text" name="kakak">

      <label>Nama Adik</label>
      <input type="text" name="adik">

      <div class="tombol">
        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </div>
    </form>
  </section>

  <!-- ======= SECTION ABOUT ======= -->
  <section id="about" class="section">
    <h2>Tentang Saya</h2>
    <?php
      // Jika data dikirim dari proses.php
      if (isset($_GET['nim'])) {
        echo "<p><strong>NIM:</strong> " . htmlspecialchars($_GET['nim']) . "</p>";
        echo "<p><strong>Nama Lengkap:</strong> " . htmlspecialchars($_GET['nama']) . "</p>";
        echo "<p><strong>Tempat, Tanggal Lahir:</strong> " . htmlspecialchars($_GET['tempat']) . ", " . htmlspecialchars($_GET['tgl']) . "</p>";
        echo "<p><strong>Hobi:</strong> " . htmlspecialchars($_GET['hobi']) . "</p>";
        echo "<p><strong>Pasangan:</strong> " . htmlspecialchars($_GET['pasangan']) . "</p>";
        echo "<p><strong>Pekerjaan:</strong> " . htmlspecialchars($_GET['pekerjaan']) . "</p>";
        echo "<p><strong>Nama Orang Tua:</strong> " . htmlspecialchars($_GET['ortu']) . "</p>";
        echo "<p><strong>Nama Kakak:</strong> " . htmlspecialchars($_GET['kakak']) . "</p>";
        echo "<p><strong>Nama Adik:</strong> " . htmlspecialchars($_GET['adik']) . "</p>";
      } else {
        echo "<p>Belum ada data pengunjung yang didaftarkan.</p>";
      }
    ?>
  </section>

     <section id="daftar">
      <h2>Pendaftaran Profil Pengunjung</h2>
  
        <h2>Tentang Saya</h2>
        <p><strong>Nama Lengkap:</strong><?php echo $sesnama ?></p>
        <p><strong>NIM:</strong><?php echo $sesnim ?></p>
        <p><strong>Tempat Lahir:</strong><?php echo $sestempatlahir ?></p>
        <p><strong>Tanggal Lahir:</strong><?php echo $sestanggallahir ?></p>
        <p><strong>Hobi:</strong><?php echo $seshobi ?></p>
        <p><strong>Pasangan:</strong><?php echo $sespasangan ?></p>
        <p><strong>Pekerjaan:</strong><?php echo $sespekerjaan ?></p>
        <p><strong>Nama Orang Tua:</strong><?php echo $sesnamaortu ?></p>
        <p><strong>Nama Kakak:</strong><?php echo $sesnamakakak ?></p>
        <p><strong>Nama Adik:</strong><?php echo $sesnamaadik ?></p>
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
        ?>


    <section id="about">
      <?php
      $nim = 2511500010;
      $NIM = '0344300002';
      $nama = "Say'yid Abdullah";
      $Nama = 'Al\'kautar Benyamin';
      $tempat = "Jebus";
      ?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong>
        <?php
        echo $NIM;
        ?>
      </p>
      <p><strong>Nama Lengkap:</strong>
        <?php
        echo $Nama;
        ?> &#128526;
      </p>
      <p><strong>Tempat Lahir:</strong> <?php echo $tempat; ?></p>
      <p><strong>Tanggal Lahir:</strong> 1 Januari 2000</p>
      <p><strong>Hobi:</strong> Memasak, coding, dan bermain musik &#127926;</p>
      <p><strong>Pasangan:</strong> Belum ada &hearts;</p>
      <p><strong>Pekerjaan:</strong> Dosen di ISB Atma Luhur &copy; 2025</p>
      <p><strong>Nama Orang Tua:</strong> Bapak Setiawan dan Ibu Maria</p>
      <p><strong>Nama Kakak:</strong> Antonius Setiawan</p>
      <p><strong>Nama Adik:</strong> <?php echo $sespesan ?></p>
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>

      <?php if (!empty($sesnama)): ?>
        <br><hr>
        <h2>Yang menghubungi kami</h2>
        <p><strong>Nama :</strong> <?php echo $sesnama ?></p>
        <p><strong>Email :</strong> <?php echo $sesemail ?></p>
        <p><strong>Pesan :</strong> <?php echo $sespesan ?></p>
      <?php endif; ?>



    </section>
  </main>

  <footer>
    <p>&copy; 2025 Yohanes Setiawan Japriadi [0344300002]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>