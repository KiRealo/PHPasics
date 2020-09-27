<?php
declare(strict_types=1);


for ($i = 1; $i <= 110; $i++) {
    if ($i % 11 == 0) {
        echo " " . PHP_EOL;
    }
    switch ($i) {
        case ($i % 3 == 0):
            echo "Coza" . " ";
            break;
        case ($i % 5 == 0):
            echo "Loza" . " ";
            break;
        case ($i % 7 == 0):
            echo "Woza" . " ";
            break;
        case($i % 3 == 0 && $i % 5 == 0):
            echo "CozaLoza" . " ";
            break;
        default:
            echo $i . " ";
    }
}
