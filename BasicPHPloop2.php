<?php
declare(strict_types=1);


$terms = readline("Input number of terms: " . PHP_EOL);
$terms--;
$i = readline("Input number(i): " . PHP_EOL);
$i2 = $i;
while ($terms > 0) {
    $i2 *= $i;
    $terms--;
}
echo $i2 . PHP_EOL;