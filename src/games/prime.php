<?php

namespace  Brain\Games\games\prime;

use function Brain\Games\engineGame;

function primeGame(): void
{
    $conditionGame = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $primeGame = function () {
        $number = rand(2, 100);

        $primeNumber = 'yes';

        if ($number <= 3) {
            $primeNumber = 'yes';
        } else {
            for ($i = 2; $i < $number; $i++) {
                if ($number % $i == 0) {
                    $primeNumber = 'no';
                    break;
                }
            }
        }
        return  $arrayGames = [$number, $primeNumber];
    };

    engineGame($primeGame, $conditionGame);
}
