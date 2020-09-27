<?php
declare(strict_types=1);

$num = readline("Enter the number. " . PHP_EOL);
if ($num == 0) {
    echo "that zero" . PHP_EOL;
} elseif ($num > 0) {
    echo "Positive";
} else echo "Negative";
