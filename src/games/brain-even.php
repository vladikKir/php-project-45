<?php

namespace Php\Project\Games\Brain\Even;

use function Php\Project\Engine\launchGame;

const RULE = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $num)
{
    return $num % 2 === 0;
}

function launchEven()
{
    $makeEvenRound = function () {
        $question = random_int(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    launchGame(RULE, $makeEvenRound);
}
