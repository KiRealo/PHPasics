<?php

declare(strict_types=1);

for ($i = 0; $i < 3; $i++) {
    for ($o = 0; $o < 3; $o++) {
        $arr[$i][$o] = '-';
        echo $arr[$i][$o] . " ";
        if ($o == 2) {
            echo PHP_EOL;
        }
    }
}

echo "player1 - X, player2 - O" . PHP_EOL;
$rand = rand(1, 2);
if ($rand == 1) {
    $simbolF = 'X';
    echo "starts player1" . PHP_EOL;
} else {
    $simbolF = 'O';
    echo "starts player2" . PHP_EOL;
}

$row = readline("Your move, row: " . PHP_EOL);
$col = readline("column: " . PHP_EOL);
$arr[$row][$col] =$simbolF;

for ($i = 0; $i < 3; $i++) {
    for ($o = 0; $o < 3; $o++) {
        echo $arr[$i][$o] . " ";
        if ($o == 2) {
            echo PHP_EOL;
        }
    }
}

while (($arr[0][0]==$arr[0][1]&&$arr[0][0]==$arr[0][2])||($arr[0][0]==$arr[0][1]&&$arr[0][0]==$arr[0][2]))

    for ($i = 0; $i < 3; $i++) {
        for ($o = 0; $o < 3; $o++) {
            if ($arr[$i][$o]) {
                echo PHP_EOL;
            }
        }
    }
