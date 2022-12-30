<?php

/*
for ( ; ; ) {
    echo "Hello For Loop" . PHP_EOL;
}
*/

$counter = 1;

for (; $counter <= 10;) {
    echo "Hello For Loop : " . $counter . PHP_EOL;
    $counter++;
}

// Perulangan Menggunakan Init Statement 

for ($counter = 1; $counter <= 10;) {
    echo "Hello For Loop : " . $counter . PHP_EOL;
    $counter++;
}

// Perulangan Menggunakan Post Statement

for ($counter = 1; $counter <= 10; $counter++) {
    echo "Hello For Loop : " . $counter . PHP_EOL;
}

// Perulangan Dari Increment Menjadi Decrement

for ($counter = 10; $counter >= 1; $counter--) {
    echo "Hello For Loop : " . $counter . PHP_EOL;
}


?>
