<?php
declare(strict_types=1);

class FizzBuzz
{
    public function __construct(int $input)
    {
        $this->input = $input;
    }

    public function checkFizzBuzz()
    {
        switch ($this->input) {
            case ($this->input % 3 == 0):
                return 'Fizz';
            case($this->input == 5):
                return 'Buzz';
            case($this->input % 3 == 0 || $this->input == 5):
                return 'FizzBuzz';
            default:
                return $this->input;
        }
    }

    public
    function checkLine()
    {
        if ($this->input % 20 == 0) {
            return PHP_EOL;
        };
    }

}

$inputUser = (int)readline('Input number: ');
//$metod=new FizzBuzz($input);

for ($i = 1; $i <= $inputUser; $i++) {
    $metod = new FizzBuzz($i);
    echo $metod->checkLine();
    echo $metod->checkFizzBuzz() . ' ';
}