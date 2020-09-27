<?php
declare(strict_types=1);

function fun2($i)
{
    if ($i % 2 == 0) {
        $out = "Even Number" . PHP_EOL;
    } else $out = "Odd Number" . PHP_EOL;
    return $out . "bye!";
}

echo fun2(5);