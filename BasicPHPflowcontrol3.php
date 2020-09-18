<?php
declare(strict_types=1);

$input = readline("Input positive integer: ");
if ($input <= 0) {
    echo "positive i said...";
}
function digiCount($input){
    return strlen($input);
}
echo digiCount($input).PHP_EOL;