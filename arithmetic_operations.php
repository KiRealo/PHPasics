<?php
declare(strict_types=1);
//exc1

function fun1(int $i1,$i2){
    if(($i1==15||$i2==15)||($i1+$i2==15)||abs($i1-$i2)==15){
        return "true";
    }else echo "false";
}

echo fun1(1,2);

//exc2

function fun2($i){
    if ($i%2==0){
        $out= "Even Number" .PHP_EOL;
    }else $out= "Odd Number".PHP_EOL;
    return $out."bye!";
}
echo fun2(5);

//exc 3

$lb=1;
$ub=100;
for($i=1;$i<99;$i++){
    $arr3[$i]=$i+1;
}
$arr3[0]=$lb;
$arr3[99]=$ub;
$sum=array_sum($arr3);
$ave=$sum/count($arr3);
echo "The sum of 1 to 100 is ".$sum.PHP_EOL."The average is ".$ave.PHP_EOL;

//exc4
$ans4=0;
function fun4($min,$max)
{
    $ans4=$min;
    for ($i = $min; $i < $max; $i++)
    {
        $ans4 = $ans4*($i+1);
    }
    return $ans4.PHP_EOL;
}
echo fun4(1,10);

//exc 5

$pc5=rand(0,100);

$inp5 =(int)readline("I'm thinking of a number between 1-100.  Try to guess it. ".PHP_EOL);
echo "> ".$inp5.PHP_EOL;

if($inp5>$pc5&&$inp5<=100){
    echo "Sorry, you are too high.  I was thinking of ".$pc5.PHP_EOL;
}elseif ($inp5==$pc5){
    echo  "You guessed! God damn cheater! Find ur luck at casino today!".PHP_EOL;
}elseif ($inp5<$pc5){
    echo "Sorry, you are too low.  I was thinking of ".$pc5.PHP_EOL;
} else echo "i told input integer from 1 -100!".PHP_EOL;

//exc 6


for($i=1;$i<=110;$i++)
{
    if($i%11==0){
        echo " ".PHP_EOL;
    }
    switch ($i){
        case ($i%3==0):
            echo "Coza"." ";
            break;
        case ($i%5==0):
            echo "Loza"." ";
            break;
        case ($i%7==0):
            echo "Woza"." ";
            break;
        case($i%3==0&&$i%5==0):
            echo "CozaLoza"." ";
            break;
        default:echo $i." ";
    }
}

//exc7

$acc=-9.81;
$t=10;
$Vi=0;
$Xi=0;
echo $x=0.5*$acc*pow($t,2);

//exc 8


$emp1= new stdClass();
$emp1->basePay =7.5;
$emp1->hours =35;
$emp1->name="emp1";

$emp2= new stdClass();
$emp2->basePay =8.20;
$emp2->hours =47;
$emp2->name="emp2";

$emp3= new stdClass();
$emp3->basePay =10.0;
$emp3->hours =73;
$emp3->name="emp3";

$empArray=[$emp1,$emp2,$emp3];

function fun8($hours,$pH){
    if($hours>40){
        $payment=(40*$pH)+($hours-40)*($pH*1.5);
    }else $payment=$hours*$pH;
    $msg1="Your money: ".$payment.PHP_EOL;
    $msg2="Error!HoursLimit! Your money: ".$payment.PHP_EOL;
    $msg3="Error!Less 8.00 base pay! Your money: ".$payment.PHP_EOL;
    $hours>60?$msg=$msg2:$msg=$msg1;
    $pH<8.00?$msg=$msg3:null;
    return $msg;
}

foreach ($empArray as $emp){
    echo $emp->name.PHP_EOL.fun8($emp->hours,$emp->basePay);
}

//exc 9

function BMI($weight,$height)
{
    $bmi=($weight*703)/(pow($height,2));
    $bmi<18.5?$msg="underweight: $bmi":$bmi>25?$msg="overweight: $bmi":$msg="bmi: $bmi";
    return $msg;
}
echo BMI(183,74);

//exc 10



class geometry
{
    public $rad, $recL, $recW, $triL, $triH;

    function circArea()
    {
        $this->rad < 0 ? $msg = "Error,negative value." : $msg = (3.14 * $this->rad) * 2;
        return $msg;
    }

    function recArea()
    {
        $this->recL < 0 || $this->recW < 0 ? $msg = "Error,negative value." : $msg = $this->recL * $this->recW;
        return $msg;
    }

    function triArea()
    {
        $this->triH < 0 || $this->triL < 0 ? $msg = "Error,negative value." : $msg = $this->triL * $this->triH * 0.5;
        return $msg;
    }
}

$input = (int)readline('Geometry calculator:' . PHP_EOL .

    '1-Calculate the Area of a Circle' . PHP_EOL .
    '2-Calculate the Area of a Rectangle' . PHP_EOL .
    '3-Calculate the Area of a Triangle' . PHP_EOL .
    '4-Quit' . PHP_EOL .
    'Enter your choice (1-4):' . PHP_EOL);
if ($input < 1 || $input > 4) {
    echo "Error. In range 1-4!!!";
}

switch ($input) {
    case ($input == 1):
        $inputC = (int)readline('Circle radius :' . PHP_EOL);
        $radius = new geometry();
        $radius->rad = $inputC;
        echo "Area :" . $radius->circArea() . PHP_EOL;

        break;
    case ($input == 2):
        $inputL = (int)readline('Rectangle Length :' . PHP_EOL);
        $inputW = (int)readline('Rectangle Width :' . PHP_EOL);
        $rect = new geometry();
        $rect->recL = $inputL;
        $rect->recW = $inputW;
        echo "Area :" . $rect->recArea() . PHP_EOL;

        break;
    case ($input == 3):
        $inputH = (int)readline('Triangle High :' . PHP_EOL);
        $inputL = (int)readline('Triangle Length :' . PHP_EOL);
        $tri = new geometry();
        $tri->triH = $inputH;
        $tri->triL = $inputL;
        echo "Area :" . $tri->triArea() . PHP_EOL;

        break;
    case ($input == 4):
        exit('have a nice day!' . PHP_EOL);

}