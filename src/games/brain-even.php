<?php

namespace Php\Project\Games\Brain\Even;

use function Php\Project\Index\makeGame;

function makeEven()
{
    $rule = 'Answer "yes" if the number is even, otherwise answer "no".';
    function isEven($num)
    {
        return $num % 2 === 0;
    }

    $makeEvenRound = function () {
        $question = random_int(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    makeGame($rule, $makeEvenRound);
}
