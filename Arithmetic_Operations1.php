<?php

declare(strict_types=1);


function fun1(int $i1, $i2)
{
    if (($i1 == 15 || $i2 == 15) || ($i1 + $i2 == 15) || abs($i1 - $i2) == 15) {
        return "true";
    } else echo "false";
}

echo fun1(1, 2);
