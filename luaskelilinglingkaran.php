<?php
// 1. MENGGUNAKAN VARIABEL LANGSUNG
$jariJari = 7;
$kelilingLingkaran = 2 * pi() * $jariJari;
echo "Keliling lingkaran dengan jari-jari $jariJari adalah $kelilingLingkaran <br>";

// 2. MENGGUNAKAN FUNGSI
function hitungKelilingLingkaran($jariJari) {
    return 2 * pi() * $jariJari;
}

$jariJariFungsi = 10;
echo "Keliling lingkaran dengan jari-jari $jariJariFungsi adalah " 
     . hitungKelilingLingkaran($jariJariFungsi) . "<br>";

// 3. MENGGUNAKAN CLASS
class Lingkaran {
    public function keliling($jariJari) {
        return 2 * pi() * $jariJari;
    }
}

$lingkaran = new Lingkaran();
$jariJariClass = 14;
echo "Keliling lingkaran dengan jari-jari $jariJariClass adalah " 
     . $lingkaran->keliling($jariJariClass) . "<br>";
?>
