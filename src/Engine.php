<?php

namespace Brain\Games;

use function BrainGames\Cli\run;
use function cli\line;
use function cli\prompt;

function engineGame($game, $conditionGame) : void
{
    $name = run();

    line($conditionGame);

    for ($i = 0; $i < 3; $i++) {
        $arrayGames = $game();

        line("Question: $arrayGames[0]");

        $answerUser = prompt("Your answer");

        if ($answerUser == $arrayGames[1]) {
            line("Correct!");
        } else {
            line("'$answerUser' is wrong answer ;(. Correct answer was '$arrayGames[1]'.");
            line("Let's try again, $name!");
            exit;
        }
    }
    line("Congratulations, $name!");
}
