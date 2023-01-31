<?php

namespace Php\Project\Games\Brain\Gcd;

use function Php\Project\Engine\launchGame;

const RULE = 'Find the greatest common divisor of given numbers.';

function findGreatestDivider(int $number1, int $number2)
{
    $number = min($number1, $number2);
    for ($divider = $number; $divider > 0; $divider -= 1) {
        if ($number1 % $divider === 0 && $number2 % $divider === 0) {
            return $divider;
        }
    }
    return 1;
}

function launchGcd()
{
    $makeGcdRound = function () {
        $number1 = random_int(1, 100);
        $number2 = random_int(1, 100);

        $question = "{$number1} {$number2}";
        $correctAnswer = findGreatestDivider($number1, $number2);

        return [$question, $correctAnswer];
    };

    launchGame(RULE, $makeGcdRound);
}
