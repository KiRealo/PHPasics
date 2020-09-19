<?php
declare(strict_types=1);

class NumberSquare
{
//    public function __construct($array){
//        $this->array=$array;
//    }
    public function count($x, $y)
    {
        return abs($x - $y) + 1;
    }
//    public function printArray($array){
//        foreach ($this->array as $item){
//            echo $item;
//        }
//        echo  PHP_EOL;
//    }
}

$game = new NumberSquare();
$min = readline('Min: ' . PHP_EOL);
$max = readline('Max: ' . PHP_EOL);
$counts = $game->count($max, $min);


$j = 0;
$arr=null;
for ($x = $min; $x <= $max; $x++) {
    $arr[$j] = $x;
    $j++;
}

foreach ($arr as $item){
    echo $item;
}
echo PHP_EOL;

//$game->printArray($arr);

while ($counts-1 > 0) {
    $timeless = $arr[0];
    for ($i = 1; $i < $counts; $i++) {
        $arr[$i - 1] = $arr[$i];
    }
    $arr[$counts - 1] = $timeless;

    foreach ($arr as $item) {
        echo $item;
    }
    echo PHP_EOL;
//    $game->printArray($arr);
    $counts--;
}