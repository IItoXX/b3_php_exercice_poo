<?php
/*
 * ÉNONCÉ :
 * Créez une classe Calculator avec des méthodes statiques add, subtract, multiply, divide.
 * Utilisez ces méthodes pour effectuer des opérations sur deux nombres.
*/

class Calculator
{
    public static function add(float $a, float $b): float
    {
        return $a + $b;
    }

    public static function subtract($a, $b)
    {
        return $a - $b;
    }

    public static function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    public static function divide(float $a, float $b): float
    {
        if ($b == 0)
        {
            echo "div impossible<br>";
            return 0;
        }
        return $a / $b;
    }
}

$a = 10;
$b = 3;

echo $a . " + " . $b . " = " . Calculator::add($a, $b) . "<br>";
echo $a . " - " . $b . " = " . Calculator::subtract($a, $b) . "<br>";
echo $a . " * " . $b . " = " . Calculator::multiply($a, $b) . "<br>";
echo $a . " / " . $b . " = " . Calculator::divide($a, $b) . "<br>";