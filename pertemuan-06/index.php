<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width= ""; initial-scale=1.0">
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

$namaMatkul1= "Algoritma dan Struktur data";
$namaMatkul2= ""; 
$namaMatkul3= ""; 
$namaMatkul4= ""; 
$namaMatkul5= "";
$sksMatkul1= ""; 
$sksMatkul2= ""; 
$sksMatkul3= ""; 
$sksMatkul4= ""; 
$sksMatkul5 ="";
$nilaiHadir1= ""; 
$nilaiHadir2= "";
$nilaiHadir3= "";
 $nilaiHadir4= ""; 
 $nilaiHadir5="";
$nilaiTugas1= "";
 $nilaiTugas2= ""; 
 $nilaiTugas3= "";
  $nilaiTugas4= ""; 
  $nilaiTugas5 ="";
$nilaiUTS1= ""; 
$nilaiUTS2= ""; 
$nilaiUTS3= ""; 
$nilaiUTS4= "";
 $nilaiUTS5 ="";
$nilaiUAS1= ""; 
$nilaiUAS2= ""; 
$nilaiUAS3= ""; 
$nilaiUAS4= ""; 
$nilaiUAS5= "";
#Nilai Akhir = (0.1 * nilaiHadir) + (0.2 * nilaiTugas) + (0.3 * nilaiUTS) + (0.4 * nilaiUAS) 
$nilaiAkhir1= (0.1 * $nilaiHadir1) + (0.2 * $nilaiTugas1) + (0.3 * $nilaiUTS1) + (0.4 * $nilaiUAS1);   
$nilaiAkhir2=  (0.1 * $nilaiHadir2) + (0.2 * $nilaiTugas2) + (0.3 * $nilaiUTS2) + (0.4 * $nilaiUAS2); 
$nilaiAkhir3= (0.1 * $nilaiHadir3) + (0.2 * $nilaiTugas3) + (0.3 * $nilaiUTS3) + (0.4 * $nilaiUAS3); 
 $nilaiAkhir4= (0.1 * $nilaiHadir4) + (0.2 * $nilaiTugas4) + (0.3 * $nilaiUTS4) + (0.4 * $nilaiUAS4); 
 $nilaiAkhir5 = (0.1 * $nilaiHadir5) + (0.2 * $nilaiTugas5) + (0.3 * $nilaiUTS5) + (0.4 * $nilaiUAS5); 

#Nilai kehadiran < 70, otomatis Grade = E. 
if ($nilaihadir1 < 70) :
$grade1 = "E";
endif;
if ($nilaihadir2 < 70) :
$grade1 = "E";
endif;
if ($nilaiHadir3 < 70) :
$grade1 = "E";
endif;
if ($nilaihadir4 < 70) :
$grade1 = "E";
endif;
if ($nilaihadir5 < 70) :
$grade1 = "E";
endif;
if ($nilaiAkhir1>=91) && ($nilaiAkhir1=<100) :
  $grade1= "A" ;
  $mutu1= 4;
elseif ($nilaiAkhir2>=81) && ($nilaiAkhir2=<90) :
  $grade2= "A-" ;
  $mutu2= 3.7;
endif;


$mutu2= "";   
$mutu3= "";
$mutu4= "";
 $mutu5 = "";
 $grade1= ""; 
$grade2= ""; 
$grade3= ""; 
$grade4= ""; 
$grade5 = "";
  #Bobot = angkaMutu * sksMatkul 
$bobot1=  $mutu1 * $sksMatkul1;
 $bobot2=   $mutu2 * $sksMatkul2;
 $bobot3=  $mutu3 * $sksMatkul3;
 $bobot4=  $mutu4 * $sksMatkul4;
 $bobot5 =  $mutu5 * $sksMatkul5;
 /*
Grade A, A-, B+, B, B-, C+, C, C- maka Status: LULUS 
Grade D, E maka Status: GAGAL
 */
switch ($grade1) :
    case "A": $status1 = "LULUS"; break;
    case "A-": $status1 = "LULUS"; break;
    case "B+": $status1 = "LULUS"; break;
    case "B": $status1 = "LULUS"; break;
    case "B-": $status1 = "LULUS"; break;
    case "C+": $status1 = "LULUS"; break;
    case "C": $status1 = "LULUS"; break;
    case "C+": $status1 = "LULUS"; break;
    case "C-": $status1 = "LULUS"; break;
    case "D": $status1 = "GAGAL"; break;
    case "E": $status1 = " GAGAL"; break;
     "A, A-, B+, B, B-, C+, C, C-"
endswitch;
$status1= ""; 
switch ($grade2) :
    case "A": $status2 = "LULUS"; break;
    case "A-": $status2 = "LULUS"; break;
    case "B+": $status2 = "LULUS"; break;
    case "B": $status2 = "LULUS"; break;
    case "B-": $status2 = "LULUS"; break;
    case "C+": $status2 = "LULUS"; break;
    case "C": $status2 = "LULUS"; break;
    case "C+": $status2 = "LULUS"; break;
    case "C-": $status2 = "LULUS"; break;
    case "D": $status2 = "GAGAL"; break;
    case "E": $status2 = " GAGAL"; break;
     "A, A-, B+, B, B-, C+, C, C-"
endswitch;
$status2= ""; 
switch ($grade3) :
    case "A": $status3 = "LULUS"; break;
    case "A-": $status3 = "LULUS"; break;
    case "B+": $status3 = "LULUS"; break;
    case "B": $status3 = "LULUS"; break;
    case "B-": $status3 = "LULUS"; break;
    case "C+": $status3 = "LULUS"; break;
    case "C": $status3 = "LULUS"; break;
    case "C+": $status3 = "LULUS"; break;
    case "C-": $status3 = "LULUS"; break;
    case "D": $status3 = "GAGAL"; break;
    case "E": $status3 = " GAGAL"; break;
     "A, A-, B+, B, B-, C+, C, C-"
endswitch;
$status3= ""; 
switch ($grade4) :
    case "A": $status4 = "LULUS"; break;
    case "A-": $status4 = "LULUS"; break;
    case "B+": $status4 = "LULUS"; break;
    case "B": $status4 = "LULUS"; break;
    case "B-": $status4 = "LULUS"; break;
    case "C+": $status4 = "LULUS"; break;
    case "C": $status4 = "LULUS"; break;
    case "C+": $status4 = "LULUS"; break;
    case "C-": $status4 = "LULUS"; break;
    case "D": $status4 = "GAGAL"; break;
    case "E": $status4 = " GAGAL"; break;
     "A, A-, B+, B, B-, C+, C, C-"
endswitch;
$status4= "";
switch ($grade5) :
    case "A": $status5 = "LULUS"; break;
    case "A-": $status5 = "LULUS"; break;
    case "B+": $status5 = "LULUS"; break;
    case "B": $status5 = "LULUS"; break;
    case "B-": $status5 = "LULUS"; break;
    case "C+": $status5 = "LULUS"; break;
    case "C": $status5 = "LULUS"; break;
    case "C+": $status5 = "LULUS"; break;
    case "C-": $status5 = "LULUS"; break;
    case "D": $status5 = "GAGAL"; break;
    case "E": $status5 = " GAGAL"; break;
     "A, A-, B+, B, B-, C+, C, C-"
endswitch;
 $status5 = "";
$totalBobot = $bobot1 +  $bobot2 +  $bobot3 +  $bobot4 +  $bobot5;
$totalSKS = $ $sksMatkul1 + $sksMatkul2 + $sksMatkul3 + $sksMatkul4 + $sksMatkul5;
$totalbobot = $bobot1 + $bobot2 + $bobot3 + $bobot4 + $bobot5;
#IPK = totalBobot / totalSKS 
$IPK = $totalbobot / $totalSKS;
?>
  <h2>Nilai saya<h2>
     <p><strong>Nama Matakuliah ke-1:</strong>
            <?php
            echo $namaMatkul1;
            ?>
            </p>