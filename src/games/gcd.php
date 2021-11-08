<?php

namespace  Brain\Games\games\gcd;

use function Brain\Games\engineGame;

function gcdGame(): void
{

    $conditionGame = 'Find the greatest common divisor of given numbers.';

    $gcdGame = function (): array {

        $firstNumberRun = [3, 6, 9, 12, 15, 18, 24, 48, 50, 100];
        shuffle($firstNumberRun);
        $secondNumberRun = [3, 6, 9, 12, 15, 18, 24, 48, 50, 100];
        shuffle($secondNumberRun);
        $firstNumber = $firstNumberRun;
        $secondNumber = $secondNumberRun;
        $question = "{$firstNumber} {$secondNumber}";

        $answerCoorrect = findGcd($firstNumber, $secondNumber);

        return [$question, $answerCoorrect];
    };

    engineGame($gcdGame, $conditionGame);
}

function findGcd($firstOperand, $secondOperand): int
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
