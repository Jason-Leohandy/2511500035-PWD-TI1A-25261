<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="about">
        <?php
        session_start();
        $sesnama = $_SESSION["nama lengkap"];
        $sesnim = $_SESSION["nim"];
        $sestempatlahir = $_SESSION["tempat lahir"];
        $sestanggallahir = $_SESSION["tanggal lahir"];
        $seshobi = $_SESSION["hobi"];
        $sespasangan = $_SESSION["pasangan"];
        $sespekerjaan = $_SESSION["pekerjaan"];
        $sesnamaortu = $_SESSION["nama orang tua"];
        $sesnamakakak = $_SESSION["nama kakak"];
        $sesnamaadik = $_SESSION["nama adik"];
        ?>
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
    </section>

    <section id="form_about">
        <form action="hello_proses.php" method="post">
            <label for="nama_lengkap">
                <span>Nama Lengkap :</span>
                <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="masukkan nama lengkap" required>
            </label>

            <label for="nim">
                <span>Nim :</span>
                <input type="text" id="nim" name="nim" placeholder="masukkan nim" required>
            </label>

            <label for="tempat_lahir">
                <span>Tempat lahir :</span>
                <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="masukkan tempat lahir" required>
            </label>

            <label for="tanggal_lahir">
                <span>Tanggal lahir :</span>
                <input type="text" id="tanggal_lahir" name="tanggal_lahir" placeholder="masukkan tanggal lahir anda"
                    required>
            </label>

            <label for="hobi">
                <span>hobi :</span>
                <input type="text" id="hobi" name="hobi" placeholder="masukkan hobi anda" required>
            </label>

            <label for="pasangan">
                <span>Pasangan :</span>
                <input type="text" id="pasangan" name="pasangan" placeholder="tuliskan pasangan anda" required>
            </label>

            <label for="pekerjaan">
                <span>Pekerjaan :</span>
                <input type="text" id="pekerjaan" name="pekerjaan" placeholder="tulis pekerjaan anda" required>
            </label>

            <label for="nama_orang_tua">
                <span>Nama Orang tua :</span>
                <input type="text" id="nama_orang_tua" name="nama_orang_tua" placeholder="tulis nama orang tua anda"
                    required>
            </label>

            <label for="nama_kakak">
                <span>Nama kakak :</span>
                <input type="text" id="nama_kakak" name="nama_kakak" placeholder="tulis nama kakak anda" required>
            </label>

            <label for="nama_adik">
                <span>Nama adik :</span>
                <input type="text" id="nama_adik" name="nama_adik" placeholder="tulis nama kakak anda" required>
            </label>

            <button type="submit">kirim</button>
            <button type="reset">batal</button>
        </form>
    </section>
</body>

</html>