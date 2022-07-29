<?php

// for (; ;) {
//     // echo "Ini unlimited loop";
// };

// for($op = 20; $op >= 1; $op--) {
//     echo "angka ke-$op";
// }

$kondisi = 1;

// while($kondisi <= 10){
//     echo "angka ke-$kondisi";
//     $kondisi++;
// }

// do {
//     echo "ini perulangan ke-$kondisi";
//     $kondisi++;
// } while ($kondisi <= 10);

$names = ["iyasz", "elaina", "gas"];

// foreach($names as $names){
//         echo "ini perulangan-$names". PHP_EOL;
// }

$person = [
    "firstName" => "yasz",
    "lastName" => "avellia",
    "middleName" => "ha"
];

// foreach($person as $key => $value){
//     echo "$key : $value" . PHP_EOL;
// }

foreach($names as $key => $value){
    echo "ini value = $value";
}

?>