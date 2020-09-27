<?php
declare(strict_types=1);


$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
$input = readline('Day number(0-6): ' . PHP_EOL);

if ($input < 0 || $input > 6) {
    echo "Not valid day..." . PHP_EOL;
}

switch ($input) {
    case $input == 0:
        echo $days[0] . PHP_EOL;
        break;
    case $input == 1:
        echo $days[1] . PHP_EOL;
        break;
    case $input == 2:
        echo $days[2] . PHP_EOL;
        break;
    case $input == 3:
        echo $days[3] . PHP_EOL;
        break;
    case $input == 4:
        echo $days[4] . PHP_EOL;
        break;
    case $input == 5:
        echo $days[5] . PHP_EOL;
        break;
    case $input == 6:
        echo $days[6] . PHP_EOL;
        break;
}