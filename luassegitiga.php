<?php

// 1. MENGGUNAKAN VARIABEL LANGSUNG
$alas = 10;
$tinggi = 5;
$luasSegitiga = 0.5 * $alas * $tinggi;
echo "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah $luasSegitiga <br>";

// 2. MENGGUNAKAN FUNGSI
function hitungLuasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

$alasFungsi = 12;
$tinggiFungsi = 8;
echo "Luas segitiga dengan alas $alasFungsi dan tinggi $tinggiFungsi adalah " 
     . hitungLuasSegitiga($alasFungsi, $tinggiFungsi) . "<br>";

// 3. MENGGUNAKAN CLASS
class Segitiga {
    public function luas($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }
}

$segitiga = new Segitiga();
$alasClass = 15;
$tinggiClass = 10;
echo "Luas segitiga dengan alas $alasClass dan tinggi $tinggiClass adalah " 
     . $segitiga->luas($alasClass, $tinggiClass) . "<br>";
?>
