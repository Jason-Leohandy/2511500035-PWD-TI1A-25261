<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Ini Header</h1>
        <button class="menu-toggle" id="menutoggle" aria-label="Toggle Navigation">
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
            <h2>&hearts;Selamat datang&hearts;</h2>
            <?php
              echo "halo dunia!<br>";
             echo "Nama saya Jason Leohandy";
             ?>

            <p>ini contoh paragraf HTML.</p>
        </section>
        <section id="about">
            <?php
            $nim = "2511500035";
            $NIM = "2511500000";
            $nama = "Jason Leohandy";
            $Nama = "Suimiann";
            $Tempatlahir ="Pangkalpinang";
            $Tanggallahir ="14 Juni 2007";
            $Hobi = "Basket,Billiard,Gaming,Bultang,Dll";
            $Pasangan = "Sudah ada" ; 
            $Pekerjaan = "Mahasiswa";
            $NamaOrtu = "Ngit Hen Dan Suraidah";
            $NamaAdik = "Justin Leorentino";
            $Motto = "Teruslah Bernafas";
            ?>

            <h2>Tentang Saya</h2>
            <p><strong>NIM:</strong>
            <?php
            echo $nim;
            ?>
            </p>
            <p><strong>Nama Lengkap:</strong> 
            <?php
             echo $nama;
            ?>
            &#128526;
        </p>
            <p><strong>Tempat Lahir:</strong>
            <?php
            echo $Tempatlahir;
            ?>
        </p>

            <p><strong>Tanggal lahir:</strong>
            <?php
            echo $Tanggallahir;
            ?>
        </p>
            <p><strong>Hobi:</strong>
            <?php
            echo $Hobi;
            ?>
        </p>
            <p><strong>Pasangan:</strong>
            <?php
            echo $Pasangan;
            ?> 
            &hearts;
        </p>
            <p><strong>Pekerjaan:</strong>
            <?php
            echo $Pekerjaan;
            ?>
        </p>
            <p><strong>Nama Orang Tua:</strong>
            <?php
            echo $NamaOrtu;
            ?>
        </p>
            <p><strong>Nama Adik:</strong>
            <?php
            echo $NamaAdik;
            ?>        
        </p>
            <p><strong>Motto Hidup:</strong>
            <?php
            echo $Motto;
            ?>
        </p>
        </section>
        <section id="contact">
            <h2>Kontak kami</h2>
            <form action="" method="get">
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
        </section>


        <section id="ipk">
            


       </section>
    </main>
    <footer>
        <p>&copy;2025 Jason Leohandy Nim [2511500035]</p>
    </footer>

    <script src="script.js"></script>
</body>
</hmtl>