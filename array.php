<?php

$array = ["iyasz", 15, true, "Elaina"];
// var_dump($array[2]);

$array[2] = "mengganti";
// var_dump($array[2]);

$array[] = "menambah";
// var_dump($array[4]);

$yasz = ["hallo", 12, false, true, null];
// var_dump($yasz[0]);

$yasz[2] = "ini mengganti";
// var_dump($yasz[2]);

$yasz[] = "menambah ke 5";
// var_dump($yasz[5]);

$var = ["coba", 12, "iyah"];
var_dump($var[1]);

$var[2] = true;
var_dump($var[2]);

$var[] = "menambahkan";
var_dump($var[3]);


//map di php

$mapTest = [
    "nama" => "Yasz Avellia",
    "umur" => 15,
    "kelas" => "XI RPL"
];

$elaina = [
    "nama" => "elaina",
    "punya" => "iyasz",
    "umur" => "unknow",
    "rumah" => "anime"
];

var_dump($elaina["rumah"]);

// var_dump($mapTest["umur"]);