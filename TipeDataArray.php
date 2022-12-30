<?php

//Kode Array

$value = array(1, 2, 3);
var_dump($value);

$nama = ["nur", "jaman"];
var_dump($nama);

//Kode Mengoperasikan Array

$names =["nur","jaman"];
var_dump($names[0]);
$names[0] = "Budi";
unset($names[1]);
var_dump($names);
$names[] = "nur";
var_dump($names);
var_dump(count($names));

//Kode Membuat Map

$nur = array(
    "id" => "nur",
    "name" => "Nur Jaman",
    "age" => 21
);
var_dump($nur);
var_dump($nur["name"]);
//Atau Bisa Membuat Map Tanpa Value
$budi = [
    "id" => "budi",
    "name" =>" Budi Mahrdika",
    "age" => 25
];
var_dump($budi);

//Kode Array Di Dalam Array

$nur = array(
    "id" => "nur",
    "name" => "Nur Jaman",
    "age" => 21,
    "address" => [
        "city" => "Bogor",
        "country" => "Indonesia"
    ]
);

var_dump($nur);
var_dump($nur["name"]);
var_dump($nur["address"]["country"]);

?>
