<?php
declare(strict_types=1);

class Piglet
{
    public function turn()
    {
        return rand(1, 6);
    }

    public function check($input)
    {
        if ($input == 1) {
            return true;
        } else return false;
    }
}

$score = 0;
echo 'Welcome to piglet!' . PHP_EOL;
$game = new Piglet();
$stop = false;
$i = 0;
while ($stop != true) {
    $i = $game->turn();
    if ($game->check($i) == false) {
        $score += $i;
        echo 'You rolled ' . $i . ' Score: ' . $score . PHP_EOL;
        $answer = readline('Roll again? y/n ' . PHP_EOL);
        $answer == 'y' ? null : $stop = true;
        $i == 1 ? $stop = true : null;
    } else $stop = true;
}
$i == 1 ? $score = 0 : null;
echo 'You rolled at ' . $i . ' Score: ' . $score . PHP_EOL;