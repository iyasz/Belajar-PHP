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
// var_dump($var[1]);

$var[2] = true;
// var_dump($var[2]);

$var[] = "menambahkan";
// var_dump($var[3]);

$geometr = ["iyasz", 14, "yes"];
// var_dump($geometr[2]);

$geometr[2] = "No";
// var_dump($geometr[2]);

$geometr[] = "tambah";
// var_dump($geometr[3]);


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

$mapcoy = [
    "jan" => "hai",
    "ranpo" => "oi",
    "tahp" => 154,
    "nggih" => true,
    "iyasz"
];

// var_dump($mapcoy[0]);

$yass = [
    "kg" => "yes",
    "oh" => true,
    "nggih" => 15,
    "trueNgabs" => "no"
];

// var_dump($yass["kg"]);

//array didalam array 

$ada = [
    "test" => 14,
    "coy" => "hah",
    "iyh" => true,
    "nama" => [
        "cewe" => "elaina",
        "cowo" => "iyasz"
    ]
];

// var_dump($ada["nama"]["cewe"]);

$ngaber = [
    "amu" => "aku",
    "kemana" => 25,
    "sip" => "kelar",
    "cita" => [
        "pertama" => "programmer",
        "kedua" => "desainer"
    ]
];

// var_dump($ngaber["cita"]["kedua"]);

$kk = [
    "ah" => "malas",
    "no" => 14,
    "alamat" => [
        "first" => "kahuripan",
        "two" => "klapanunggal"
    ]
];
// var_dump($kk["alamat"]["first"]);

$asyou = [
    "nameB" => "yasz",
    "nameG" => "elaina",
    "status" => [
        "yes" => "ha",
        "no" => 15
    ]
];
// var_dump($asyou["status"]["yes"]);
// var_dump($asyou["status"]["no"]);

$hah = [
    "var" => "iyh",
    "har" => 12,
    "alamat" => [
        "ke1" => "kahuripan",
        "ke2" => "jepang"
    ]
];
var_dump($hah["alamat"]["ke1"]);

