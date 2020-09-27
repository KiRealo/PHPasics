<?php
declare(strict_types=1);

$lb = 1;
$ub = 100;
for ($i = 1; $i < 99; $i++) {
    $arr3[$i] = $i + 1;
}
$arr3[0] = $lb;
$arr3[99] = $ub;
$sum = array_sum($arr3);
$ave = $sum / count($arr3);
echo "The sum of 1 to 100 is " . $sum . PHP_EOL . "The average is " . $ave . PHP_EOL;