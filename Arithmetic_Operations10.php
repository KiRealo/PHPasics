<?php
declare(strict_types=1);


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