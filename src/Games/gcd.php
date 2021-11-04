<?php

namespace  Brain\Games\games\gcd;

use function Brain\Games\engineGame;

function gcdGame()
{

    $conditionGame = 'Find the greatest common divisor of given numbers.';

    $gcdGame = function () {

        $firstNumber = [3, 6, 9, 12, 15, 18, 24, 48, 50, 100];
        shuffle($firstNumber);
        $secondNumber = [3, 6, 9, 12, 15, 18, 24, 48, 50, 100];
        shuffle($secondNumber);
        $question = "{$firstNumber[0]} {$secondNumber[0]}";
        $answerCoorrect = gmp_gcd($firstNumber[0], $secondNumber[0]);

        return $arrayGames = [$question, $answerCoorrect];
    };

    engineGame($gcdGame, $conditionGame);
}
