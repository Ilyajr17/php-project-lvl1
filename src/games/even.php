<?php

namespace  Brain\Games\games\even;

use function Brain\Games\engineGame;

function evenGame(): void
{
    $conditionGame = 'Answer "yes" if the number is even, otherwise answer "no"';

    $evenGame = function () {

        $randomNumber = rand(0, 100);

        if ($randomNumber % 2 == 0) {
            $answerGames = 'yes';
        } else {
            $answerGames = 'no';
        }

        return $arrayGames = [$randomNumber, $answerGames];
    };
    engineGame($evenGame, $conditionGame);
}
