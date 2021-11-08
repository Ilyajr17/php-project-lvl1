<?php

namespace  Brain\Games\games\gcd;

use function Brain\Games\engineGame;

function gcdGame(): void
{

    $conditionGame = 'Find the greatest common divisor of given numbers.';

    $gcdGame = function () {

        $firstNumber = [3, 6, 9, 12, 15, 18, 24, 48, 50, 100];
        shuffle($firstNumber);
        $secondNumber = [3, 6, 9, 12, 15, 18, 24, 48, 50, 100];
        shuffle($secondNumber);
        $question = "{$firstNumber[0]} {$secondNumber[0]}";

        $answerCoorrect = findGcd($firstNumber[0], $secondNumber[0]);

        return $arrayGames = [$question, $answerCoorrect];
    };

    engineGame($gcdGame, $conditionGame);
}

function findGcd($firstOperand, $secondOperand): string
{
    while ($firstOperand !== 0 && $secondOperand !== 0) {
        if ($firstOperand > $secondOperand) {
            $firstOperand = $firstOperand % $secondOperand;
        } else {
            $secondOperand = $secondOperand % $firstOperand;
        }
    }
    return $firstOperand + $secondOperand;
}
