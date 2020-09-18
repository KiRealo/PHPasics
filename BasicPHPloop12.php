<?php

declare(strict_types=1);

echo "The first 10 natural numbers are:";

for ($i = 1; $i < 11; $i++) {
    echo $i . PHP_EOL;
}

//todo write a program that displays first 10 natural numbers

//exc 2


$terms = readline("Input number of terms: " . PHP_EOL);
$terms--;
$i = readline("Input number(i): " . PHP_EOL);
$i2 = $i;
while ($terms > 0) {
    $i2 *= $i;
    $terms--;
}
echo $i2 . PHP_EOL;

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function