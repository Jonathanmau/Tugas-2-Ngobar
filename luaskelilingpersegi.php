<?php
// 1. Menghitung luas dan keliling persegi secara langsung
$sisi = 7;
$luas = $sisi * $sisi;
$keliling = 4 * $sisi;
echo "Luas persegi dengan sisi $sisi adalah $luas <br>";
echo "Keliling persegi dengan sisi $sisi adalah $keliling <br><br>";

// 2. Fungsi untuk menghitung luas dan keliling persegi
function hitungLuasPersegi($sisi) {
    return $sisi * $sisi;
}

function hitungKelilingPersegi($sisi) {
    return 4 * $sisi;
}

$s = 20;
$luasFungsi = hitungLuasPersegi($s);
$kelilingFungsi = hitungKelilingPersegi($s);
echo "Luas persegi dengan sisi $s adalah $luasFungsi <br>";
echo "Keliling persegi dengan sisi $s adalah $kelilingFungsi <br><br>";

// 3. Class untuk menghitung luas dan keliling persegi
class RumusPersegi {
    public function hitungLuas($sisi) {
        return $sisi * $sisi;
    }

    public function hitungKeliling($sisi) {
        return 4 * $sisi;
    }
}

// Membuat objek dari class dan menghitung luas dan keliling
$persegi = new RumusPersegi();
echo "Luas persegi dengan sisi 9 adalah " . $persegi->hitungLuas(9) . "<br>";
echo "Keliling persegi dengan sisi 9 adalah " . $persegi->hitungKeliling(9);
?>
