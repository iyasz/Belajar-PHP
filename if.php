<?php

$nilaiUjian = 70;
$nilaiHarian = 85;

// if ($nilaiHarian >= 85 && $nilaiUjian <= 70) {
//     echo "Kamu  Lulus!" . PHP_EOL;
// } else {
//     echo "Kamu Tidak Lulus!" . PHP_EOL;
// }

$p = 71;
$q = 61;

if ($p >= 90 && $q >= 80) {
    echo "Pertama";
} else if ($p > 80 && $q > 70) {
    echo "kedua";
} else if ($p > 70 && $q > 60) {
    echo "ketiga";
} else {
    echo "keempat";
};

?>