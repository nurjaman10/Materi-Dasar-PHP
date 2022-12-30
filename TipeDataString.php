<?php

echo 'Nama : ';
echo 'Nur Jaman ';
echo "\n";

echo "Nama : ";
echo "Nur\t Jaman\n";

//Heredoc

echo <<<NUR
Ini adalah contoh string yang sangat panjang,
dan juga tidak perlu mengetik ENTER secara manual,
"bisa untuk quote juga" 
NUR;

//Nowdoc

echo <<<'NUR'
Ini adalah contoh string yang sangat panjang,
dan juga tidak perlu mengetik ENTER secara manual,
"bisa untuk quote juga" 
NUR;

?>
