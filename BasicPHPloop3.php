<?php
declare(strict_types=1);

$word1 = (string)readline('Enter first word: ');
echo $word1 . PHP_EOL;
$word2 = (string)readline('Enter second word: ');
echo $word2 . PHP_EOL;

$length1 = strlen($word1);
$length2 = strlen($word2);
$dots = (int)30 - ($length1 + $length2);

echo $word1;
for ($i = 0; $i < $dots; $i++) {
    echo '.';
}
echo $word2;