<?php

class Calc
{
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operator, int $mum1, int $num2)
    {
        $this->operator = $operator;
        $this->num1 = $mum1;
        $this->num2 = $num2;
    }

    public function calculator()
    {
        switch ($this->operator) {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
                break;

            default:
                echo "Error";
                break;
        }
    }
}
