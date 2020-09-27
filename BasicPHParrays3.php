<?php

declare(strict_types=1);


$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];


$input = readline("Enter the value to search for: ");
foreach ($numbers as $number) {
    if ($input == $number) {
        echo "yea we have!" . $input . PHP_EOL;
    }
}

//todo check if an array contains a value user entered