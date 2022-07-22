<?php

$array = ["iyasz", 15, true, "Elaina"];
var_dump($array[2]);

$array[2] = "mengganti";
var_dump($array[2]);

$array[] = "menambah";
var_dump($array[4]);