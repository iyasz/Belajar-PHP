<?php 

// function sayHello(){
//     echo "hello function" . PHP_EOL;
// }

// echo sayHello();

// if(false){
//     function sayHai(){
//         echo "Hai";
//     }
// }

// function sayHy($name){
//     echo "Hy $name" . PHP_EOL;
// };


function Pertama(){
    $nilai = 90; 
    $absen = 80;
    if($nilai >= 95 && $absen >= 80){
        return "Kamu Lulus";
    } else if($nilai >= 80 && $absen >= 76) {
        return "Kamu Remedial";
    } else {
        return 'Haha';
    }
};

var_dump(Pertama());