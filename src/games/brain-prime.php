<?php

namespace Php\Project\Games\Brain\Prime;

use function Php\Project\Index\makeGame;

function isPrime(int $expression)
{
    if ($expression < 2 || ($expression % 2 === 0 && $expression !== 2)) {
        return false;
    }
    for ($divider = 2; $divider <= ceil($expression / 2); $divider += 1) {
        if ($expression % $divider === 0 && $expression !== $divider) {
            return false;
        }
    }
    return true;
}

function makePrime()
{
    $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $makePrimeRound = function () {
        $question = random_int(1, 100);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    makeGame($rule, $makePrimeRound);
}
