<?php
// Menghitung luas persegi langsung
$sisi = 7;
$luas = $sisi * $sisi;
echo "Hasil dari luas persegi dengan sisi $sisi adalah $luas <br>";

// Membuat fungsi untuk menghitung luas persegi
function hitungLuasPersegi($sisi) {
    return $sisi * $sisi;
}

$s = 20;
$hasilPenjumlahan = hitungLuasPersegi($s);
echo "Hasil dari luas persegi dengan sisi $s adalah $hasilPenjumlahan <br>";

// Membuat class untuk menghitung luas persegi
class RumusPersegi {
    // Fungsi untuk menghitung luas persegi
    public function hitungLuas($sisi) {
        return $sisi * $sisi;
    }
}

// Membuat objek dari class RumusPersegi dan menghitung luas
$persegi = new RumusPersegi();
echo "Hasil dari class di atas adalah " . $persegi->hitungLuas(9);
?>

echo "# Tugas-2" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/Jonathanmau/Tugas-2.git
git push -u origin main