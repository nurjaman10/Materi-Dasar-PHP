<?php

//Tipe Data Bilangan Integer

echo "Desimal : ";
var_dump(1234);
echo "Octal : ";
var_dump(01234);
echo "Hexadesimal : ";
var_dump(0x1A);
echo "Binary : ";
var_dump(0b111111);
echo "Underscore in number : ";
var_dump(1_234_567);

//Tipe Data Bilangan Floting Point

echo"Floating Point : ";
var_dump(1.234);
echo"Floating Point dengan E notari Plus (1.2 x 1000) : ";
var_dump(1.2e3);
echo"Floating Point dengan E notari Minus (7 x 0.001) : ";
var_dump(1.7e-3);
echo"Underscore di Floating Point : ";
var_dump(1_234.567);

//Tipe Data Bilangan Integer Overflow

echo"Integer Overflow : ";
var_dump(9223372036854775808);


?>
