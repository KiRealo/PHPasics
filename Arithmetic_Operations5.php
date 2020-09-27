<?php
declare(strict_types=1);

$pc5 = rand(0, 100);

$inp5 = (int)readline("I'm thinking of a number between 1-100.  Try to guess it. " . PHP_EOL);
echo "> " . $inp5 . PHP_EOL;

if ($inp5 > $pc5 && $inp5 <= 100) {
    echo "Sorry, you are too high.  I was thinking of " . $pc5 . PHP_EOL;
} elseif ($inp5 == $pc5) {
    echo "You guessed! God damn cheater! Find ur luck at casino today!" . PHP_EOL;
} elseif ($inp5 < $pc5) {
    echo "Sorry, you are too low.  I was thinking of " . $pc5 . PHP_EOL;
} else echo "i told input integer from 1 -100!" . PHP_EOL;
