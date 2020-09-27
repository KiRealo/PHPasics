<?php
declare(strict_types=1);

function BMI($weight, $height)
{
    $bmi = ($weight * 703) / (pow($height, 2));
    $bmi < 18.5 ? $msg = "underweight: $bmi" : $bmi > 25 ? $msg = "overweight: $bmi" : $msg = "bmi: $bmi";
    return $msg;
}

echo BMI(183, 74);