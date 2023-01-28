<?php

namespace Php\Project\Index;

use function cli\line as line;
use function cli\prompt;

const ROUND_COUNT = 3;

function makeGame(string $rule, callable $makeRound)
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, {$name}!");
    line($rule);

    for ($i = 0; $i < ROUND_COUNT; $i += 1) {
        [$question, $correctAnswer] = $makeRound();

        line("Question: {$question}");
        $answer = prompt("Your answer: ");

        if ($answer === (string) $correctAnswer) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!");
}
