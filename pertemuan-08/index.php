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

</section>
   <section id="Handling_form">
       <h2>Pendaftaran Profil Pengunjung<h2>
      <form action="index_proses.php" method="POST">
      
        <label for="Nama"><span>Nama:</span>
          <input type="text" id="nama" name="Nama" placeholder="Masukkan nama Anda" required autocomplete="Nama">
        </label>

        <label for="NIM"><span>NIM:</span>
          <input type="text" id="NIM" name="NIM" placeholder="Masukkan NIM Anda" required autocomplete="NIM">
        </label>

        <label for="Tempat Lahir"><span>Tempat Lahir:</span>
          <input id="text" name="Tempat Lahir" placeholder="Masukkan Tempat Lahir Anda" required autocomplete="Tempat Lahir">
        </label>
         <label for="Tanggal Lahir"><span>Tanggal Lahir:</span>
          <input type="text" id="Tanggal Lahir" name="Tanggal Lahir" placeholder="Masukkan Tanggal Lahir Anda" required autocomplete="Tanggal Lahir">
        </label>
         <label for="Hobi"><span>Hobi:</span>
          <input type="text" id="Hobi" name="Hobi" placeholder="Masukkan Hobi Anda" required autocomplete="Hobi">
        </label>
         <label for="Pasangan"><span>Pasangan:</span>
          <input type="text" id="Pasangan" name="Pasangan" placeholder="Masukkan kalau ga jomblo" required autocomplete="Pasangan">
        </label>
        <label for="Pekerjaan"><span>Pekerjaan:</span>
          <input type="text" id="Pekerjaan" name="Pekerjaan" placeholder="Masukkan Pekerjaan Anda" required autocomplete="Pekerjaan">
        </label>
         <label for="Nama Orang Tua"><span>Nama Orang Tua:</span>
          <input type="text" id="Nama Orang Tua" name="Nama Orang Tua" placeholder="Masukkan Nama Orang Tua Anda" required autocomplete="Nama Orang Tua">
        </label>
         <label for="Nama Kakak"><span>Nama Kakak:</span>
          <input type="text" id="Nama Kakak" name="Nama Kakak" placeholder="Masukkan Nama Kakak (Kalau ada)" required autocomplete="Nama Kakak">
        </label>
         <label for="Nama Adik"><span>Nama Adik:</span>
          <input type="text" id="Nama Adik" name="Nama Adik" placeholder="Masukkan Nama Adik (Kalau Ada)" required autocomplete="Nama Adik">
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