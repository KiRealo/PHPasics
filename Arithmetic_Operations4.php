<?php
declare(strict_types=1);

$ans4 = 0;
function fun4($min, $max)
{
    $ans4 = $min;
    for ($i = $min; $i < $max; $i++) {
        $ans4 = $ans4 * ($i + 1);
    }
    return $ans4 . PHP_EOL;
}

echo fun4(1, 10);