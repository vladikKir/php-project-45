<?php

namespace Php\Project\Games\Brain\Progression;

use function Php\Project\Engine\launchGame;

function buildProgression(int $length, int $firstNumber, int $step)
{
    $progression = [];

    for ($i = 0; $i <= $length; $i += 1) {
        $nextNumber = $firstNumber + ($step * $i);
        array_push($progression, $nextNumber);
    }
    return $progression;
}

function launchProgression()
{
    $rule = 'What number is missing in the progression?';

    $makeProgressionRound = function () {
        $length = random_int(5, 10);
        $firstNumber = random_int(1, 20);
        $step = random_int(1, 10);
        $progressionArray = buildProgression($length, $firstNumber, $step);
        $maxHiddenIndex = count($progressionArray) - 1;
        /* @phpstan-ignore-next-line */
        $numberHiddenIndex = random_int(0, $maxHiddenIndex);

        $correctAnswer = $progressionArray[$numberHiddenIndex];

        $progressionArray[$numberHiddenIndex] = '..';
        $question = implode(' ', $progressionArray);

        return [$question, $correctAnswer];
    };

    launchGame($rule, $makeProgressionRound);
}
