<?php

namespace  Brain\Games\games\progression;

use function Brain\Games\engineGame;

function progressionGame()
{
    $conditionGame = 'What number is missing in the progression?';

    $progressionGame = function () {
        $startOfProgression = rand(0, 100);
        $lengthProgression = 10;
        $questionProgression = rand(0, 10);
        $progression = '';
        $stepProgression = rand(2, 3);

        for ($i = 0; $i <= $lengthProgression; $i++) {
            $startOfProgression = $startOfProgression + $stepProgression;

            if ($i == $questionProgression) {
                $progression = "{$progression} ..";
                $answrProgression = $startOfProgression;
            } else {
                $progression = "{$progression} {$startOfProgression}";
            }
        }

        $progression = trim($progression);

        return $arrayGames = [$progression, $answrProgression];
    };

    engineGame($progressionGame, $conditionGame);
}
