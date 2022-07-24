<?php
$aritmatika = 24 + 23;
$pengurangan = 73 - 23;
$pembagian = 45 / 5;
$perkalian = 3 * 4;
$pangkat = 3**5;
$total = $aritmatika + $pengurangan + $pembagian + $perkalian + $pangkat;
// var_dump($total);

//operator penugasan

$penugasan = 13;
$kali = 34;
$bagi = 26;
$kurang = 12;
$penugasan += $kali;
$penugasan /= $bagi;
$penugasan -= $kurang;
// var_dump($penugasan);

// operator perbandingan
$samadengan = 5 == 2;
$identik = "5" === 5;
$lebihbesar = 5 > 2;
$lebihkecil = 9 < 15;
$tidakSamaDengan = 5 != 5;
$tidakType = 5 !== "5";
var_dump($tidakType);
