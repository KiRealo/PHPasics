<?php
declare(strict_types=1);

class RollTwoDice
{
    public function rand()
    {
        return rand(1, 6);
    }

    public function check($num1, $num2, $inp)
    {
        if ($num1 + $num2 == $inp) {
            return true;
        } else return false;
    }
}

$game = new RollTwoDice();
$input = readline('Enter desired number: ' . PHP_EOL);
$number1 = $game->rand();
$number2 = $game->rand();
while ($game->check($number1, $number2, $input) != true) {
    $number1 = $game->rand();
    $number2 = $game->rand();
    echo $number1 . ' and ' . $number2 . ' = ' . ($number1 + $number2) . PHP_EOL;
}
echo $number1 . ' and ' . $number2 . ' = ' . ($number1 + $number2) . PHP_EOL;
