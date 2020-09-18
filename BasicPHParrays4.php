<?php

declare(strict_types=1);

$arra=[]; //$arra=(int)[]; doesnt work? why?
for($i=0;$i<10;$i++)
{
    $arra[$i]=rand(0,100);
}
$arra2=$arra;
$arra[9]=-7;

echo "array1: ";

foreach ($arra as $item){
    echo $item." ";
}
echo PHP_EOL;
echo "array2: ";
foreach ($arra2 as $item){
    echo $item." ";
}
echo PHP_EOL;