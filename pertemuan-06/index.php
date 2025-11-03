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
     <?php
// =========================
// DATA MATA KULIAH
// =========================
$namaMatkul = ["Algoritma dan Struktur Data", "Agama", "Matematika Diskrit", "Basis Data", "Pemrograman Web Dasar"];
$sks        = [4, 2, 3, 3, 3];
$hadir      = [90, 70, 80, 75, 69];
$tugas      = [60, 50, 70, 80, 80];
$uts        = [80, 60, 75, 85, 90];
$uas        = [70, 80, 70, 90, 100];

$totalBobot = 0;
$totalSKS   = 0;

echo "<section id='ipk'>";
echo "<h2>Nilai Saya</h2>";

for ($i = 0; $i < count($namaMatkul); $i++) {
    // =========================
    // Perhitungan Nilai Akhir
    // =========================
    $nilaiAkhir = (0.1 * $hadir[$i]) + (0.2 * $tugas[$i]) + (0.3 * $uts[$i]) + (0.4 * $uas[$i]);

    // =========================
    // Menentukan Grade & Mutu
    // =========================
    if ($hadir[$i] < 70) {
        $grade = "E";
        $mutu = 0.00;
    } elseif ($nilaiAkhir >= 55) {
        $grade = "A";
        $mutu = 4.00;
    } elseif ($nilaiAkhir >= 80) {
        $grade = "A-";
        $mutu = 3.70;
    } elseif ($nilaiAkhir >= 75) {
        $grade = "B+";
        $mutu = 3.30;
    } elseif ($nilaiAkhir >= 70) {
        $grade = "B";
        $mutu = 3.00;
    } elseif ($nilaiAkhir >= 65) {
        $grade = "B-";
        $mutu = 2.70;
    } elseif ($nilaiAkhir >= 60) {
        $grade = "C+";
        $mutu = 2.30;
    } elseif ($nilaiAkhir >= 55) {
        $grade = "C";
        $mutu = 2.00;
    } elseif ($nilaiAkhir >= 50) {
        $grade = "C-";
        $mutu = 1.70;
    } elseif ($nilaiAkhir >= 40) {
        $grade = "D";
        $mutu = 1.00;
    } else {
        $grade = "E";
        $mutu = 0.00;
    }

    // =========================
    // Status Lulus / Gagal
    // =========================
    $status = in_array($grade, ["A", "A-", "B+", "B", "B-", "C+", "C", "C-"]) ? "LULUS" : "GAGAL";

    // =========================
    // Bobot dan Akumulasi
    // =========================
    $bobot = $mutu * $sks[$i];
    $totalBobot += $bobot;
    $totalSKS += $sks[$i];

    // =========================
    // OUTPUT SETIAP MATAKULIAH
    // =========================
    echo "<h3>Nama Mata Kuliah ke-" . ($i + 1) . ": {$namaMatkul[$i]}</h3>";
    echo "SKS: {$sks[$i]}<br>";
    echo "Kehadiran: {$hadir[$i]}<br>";
    echo "Tugas: {$tugas[$i]}<br>";
    echo "UTS: {$uts[$i]}<br>";
    echo "UAS: {$uas[$i]}<br>";
    echo "Nilai Akhir: " . number_format($nilaiAkhir, 2) . "<br>";
    echo "Grade: $grade<br>";
    echo "Angka Mutu: " . number_format($mutu, 2) . "<br>";
    echo "Bobot: " . number_format($bobot, 2) . "<br>";
    echo "Status: $status<br><hr>";
}

// =========================
// HITUNG IPK
// =========================
$IPK = $totalBobot / $totalSKS;

echo "<h3>Total Bobot = " . number_format($totalBobot, 2) . "</h3>";
echo "<h3>Total SKS = $totalSKS</h3>";
echo "<h3>IPK = " . number_format($IPK, 2) . "</h3>";
echo "</section>";
?>
       </section>

       <h2>
       </h2>

    </main>
    <footer>
        <p>&copy;2025 Jason Leohandy Nim [2511500035]</p>
    </footer>

    <script src="script.js"></script>
</body>
</hmtl>