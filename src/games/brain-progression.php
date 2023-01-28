<?php

namespace Php\Project\Games\Brain\Progression;

use function Php\Project\Index\makeGame;

function makeProgression()
{
    $rule = 'What number is missing in the progression?';
    function buildProgression($length, $firstNumber, $step)
    {
        $progression = [];

        for ($i = 0; $i <= $length; $i += 1) {
            $nextNumber = $firstNumber + ($step * $i);
            array_push($progression, $nextNumber);
        }
        return $progression;
    }

    $makeProgressionRound = function () {
        $length = random_int(5, 10);
        $firstNumber = random_int(1, 20);
        $step = random_int(1, 10);
        $progressionArray = buildProgression($length, $firstNumber, $step);
        $numberHiddenIndex = random_int(0, count($progressionArray) - 1);

        $correctAnswer = $progressionArray[$numberHiddenIndex];

        $progressionArray[$numberHiddenIndex] = '..';
        $question = implode(' ', $progressionArray);

        return [$question, $correctAnswer];
    };

    makeGame($rule, $makeProgressionRound);
}
