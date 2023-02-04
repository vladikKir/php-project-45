<?php

namespace Brain\Games\Even;

use function Brain\Engine\launchGame;

function isEven(int $num)
{
    return $num % 2 === 0;
}

function launchEven()
{
    $rule = 'Answer "yes" if the number is even, otherwise answer "no".';

    $makeEvenRound = function () {
        $question = random_int(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    launchGame($rule, $makeEvenRound);
}
