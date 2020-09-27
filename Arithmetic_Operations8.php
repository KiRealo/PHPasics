<?php
declare(strict_types=1);

$emp1 = new stdClass();
$emp1->basePay = 7.5;
$emp1->hours = 35;
$emp1->name = "emp1";

$emp2 = new stdClass();
$emp2->basePay = 8.20;
$emp2->hours = 47;
$emp2->name = "emp2";

$emp3 = new stdClass();
$emp3->basePay = 10.0;
$emp3->hours = 73;
$emp3->name = "emp3";

$empArray = [$emp1, $emp2, $emp3];

function fun8($hours, $pH)
{
    if ($hours > 40) {
        $payment = (40 * $pH) + ($hours - 40) * ($pH * 1.5);
    } else $payment = $hours * $pH;
    $msg1 = "Your money: " . $payment . PHP_EOL;
    $msg2 = "Error!HoursLimit! Your money: " . $payment . PHP_EOL;
    $msg3 = "Error!Less 8.00 base pay! Your money: " . $payment . PHP_EOL;
    $hours > 60 ? $msg = $msg2 : $msg = $msg1;
    $pH < 8.00 ? $msg = $msg3 : null;
    return $msg;
}

foreach ($empArray as $emp) {
    echo $emp->name . PHP_EOL . fun8($emp->hours, $emp->basePay);
}