<?php
declare(strict_types=1);


$input1 = readline("Input the 1st number: ");

$input2 = readline("Input the 2nd number: ");

$input3 = readline("Input the 3rd number: " . PHP_EOL);

$array = [$input1, $input2, $input3];
$max = 0;
for ($i = 0; $i < count($array); $i++) {
    $array[$i] > $max ? $max = $array[$i] : null;
}
echo $max . PHP_EOL;
