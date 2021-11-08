<?php

namespace Brain\Games;

use function cli\err;
use function cli\line;
use function cli\prompt;

function engineGame(callable $game, string $conditionGame): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");

    line($conditionGame);

    for ($i = 0; $i < 3; $i++) {
        [$question, $rightAnswer] = $game();

        line("Question: $question");

        $answerUser = prompt("Your answer");

        if ($answerUser !== $rightAnswer) {
            err("'$answerUser' is wrong answer ;(. Correct answer was '$rightAnswer'.");
            line("Let's try again, $name!");
            exit;
        } else {
            line("Correct!");
        }
    }
    line("Congratulations, $name!");
}
