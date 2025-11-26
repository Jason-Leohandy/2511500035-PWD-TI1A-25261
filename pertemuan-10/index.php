$namaMatkul = ["Kalkulus", "Logika Informatika", "Konsep Basis Data", "Wawasan Berbudi Luhur", "Pemrograman Web Dasar"];
$sks        = [4, 4, 4, 3, 4];
$hadir      = [90, 70, 80, 75, 80];
$tugas      = [60, 100, 70, 80, 80];
$uts        = [80, 80, 75, 85, 90];
$uas        = [70, 80, 70, 90, 100];

$totalBobot = 0;
$totalSKS   = 0;

echo "<section id='ipk'>";
echo "<h2>Nilai Saya</h2>";

for ($i = 0; $i < count($namaMatkul); $i++) {

    $nilaiAkhir = (0.1 * $hadir[$i]) + (0.2 * $tugas[$i]) + (0.3 * $uts[$i]) + (0.4 * $uas[$i]);

    if ($hadir[$i] < 70) {
        $grade = "E";
        $mutu = 0.00;
    } elseif ($nilaiAkhir >= 90) {
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
    } elseif ($nilaiAkhir >= 35) {
        $grade = "D";
        $mutu = 1.00;
    } else {
        $grade = "E";
        $mutu = 0.00;
    }

    $status = in_array($grade, ["A", "A-", "B+", "B", "B-", "C+", "C", "C-"]) ? "LULUS" : "GAGAL";

    $bobot = $mutu * $sks[$i];
    $totalBobot += $bobot;
    $totalSKS += $sks[$i];

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


$IPK = $totalBobot / $totalSKS;

echo "<h3>Total Bobot = " . number_format($totalBobot, 2) . "</h3>";
echo "<h3>Total SKS = $totalSKS</h3>";
echo "<h3>IPK = " . number_format($IPK, 2) . "</h3>";
echo "</section>";
?>
       </section>

    </main>
    <footer>
        <p>&copy;2025 Jason Leohandy Nim [2511500035]</p>
    </footer>

    <script src="script.js"></script>
</body>
</hmtl>