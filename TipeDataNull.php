<?php

$name = "nur";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

//Mengecek Apakah Data Null

echo "Is Name Null? : ";
echo is_null($name);
echo "\n";
//Atau Bisa Mengecek Menggunakan var_dump Untuk Mengecek Apakah Tipe Data Boolean
echo "Is Age Null? : ";
var_dump(is_null($age));
echo "\n";

//Atau Bisa Juga Menggunakan Tipe Data Boolean Untuk Cek Data

$name = "nur";
$name = NULL;

$isNull = is_null($name);
var_dump($isNull);

echo "\n";

// Menghapus Variable

$contoh = "nur";
unset($contoh);

$contoh = "nur";         //Jika menggunakan isset Akan Memunculkan Variable Yang
$contoh = null;         //Berisikan Tipe Data Boolean 

var_dump(isset($contoh));

echo $contoh;         //Menggunakan Unset Dengan echo Akan Error Atau Menghapus Variable

?>

