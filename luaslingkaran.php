<?php
// 1. MENGGUNAKAN VARIABEL LANGSUNG
$jariJari = 7;
$luasLingkaran = pi() * $jariJari * $jariJari;
echo "Luas lingkaran dengan jari-jari $jariJari adalah $luasLingkaran <br>";

// 2. MENGGUNAKAN FUNGSI
function hitungLuasLingkaran($jariJari) {
    return pi() * $jariJari * $jariJari;
}

$jariJariFungsi = 10;
echo "Luas lingkaran dengan jari-jari $jariJariFungsi adalah " 
     . hitungLuasLingkaran($jariJariFungsi) . "<br>";

// 3. MENGGUNAKAN CLASS
class Lingkaran {
    public function luas($jariJari) {
        return pi() * $jariJari * $jariJari;
    }
}

$lingkaran = new Lingkaran();
$jariJariClass = 14;
echo "Luas lingkaran dengan jari-jari $jariJariClass adalah " 
     . $lingkaran->luas($jariJariClass) . "<br>";
?>
