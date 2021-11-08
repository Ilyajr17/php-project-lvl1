<?php

namespace Brain\Games;

use function BrainGames\Cli\run;
use function cli\line;
use function cli\prompt;

function engineGame($game, $conditionGame): void
{
    $name = run();

    line($conditionGame);

    for ($i = 0; $i < 3; $i++) {
        [$question, $rightAnswer] = $game();

        line("Question: $question");

        $answerUser = prompt("Your answer");

        if ($answerUser == $rightAnswer) {
            line("Correct!");
        } else {
            line("'$answerUser' is wrong answer ;(. Correct answer was '$rightAnswer'.");
            line("Let's try again, $name!");
            exit;
        }
    }
    line("Congratulations, $name!");
}
