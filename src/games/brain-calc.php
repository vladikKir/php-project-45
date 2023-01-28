<?php

namespace Php\Project\Games\Brain\Calc;

use function Php\Project\Index\makeGame;

function makeCalc()
{
    $rule = 'What is the result of the expression?';

    function calculate($number1, $number2, $operator)
    {
        switch ($operator) {
            case '+':
                return $number1 + $number2;
            case '-':
                return $number1 - $number2;
            case '*':
                return $number1 * $number2;
        }
    }

    function getRandOperator()
    {
        $operators = ['+', '-', '*'];
        return $operators[random_int(0, 2)];
    }

    $makeCalcRound = function () {
        $operator = getRandOperator();

        $number1 = random_int(1, 100);
        $number2 = random_int(1, 100);

        $question = ("{$number1} {$operator} {$number2}");
        $correctAnswer = calculate($number1, $number2, $operator);

        return [$question, $correctAnswer];
    };

    makeGame($rule, $makeCalcRound);
}
