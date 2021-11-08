<?php

namespace  Brain\Games\games\calc;

use function Brain\Games\engineGame;

function calculate(string $mathematicalOperation, int $firstNumber, int $secondNumber): int
{
    if ($mathematicalOperation === '+') {
        return ($firstNumber + $secondNumber);
    }

    if ($mathematicalOperation === '-') {
        return ($firstNumber - $secondNumber);
    }

    if ($mathematicalOperation === '*') {
        return ($firstNumber * $secondNumber);
    }

    return 0;
}

function calcGame(): void
{
    $conditionGame = 'What is the result of the expression?';

    $calcGame = function (): array {

        $firstNumber = rand(0, 5);
        $secondNumber = rand(0, 5);
        $mathematicalOperationRundom = ['+', '-', '*'];
        shuffle($mathematicalOperationRundom);
        $mathematicalOperation = $mathematicalOperationRundom[0];

        $question = "{$firstNumber} {$mathematicalOperation} {$secondNumber}";

        $answer = calculate($mathematicalOperation, $firstNumber, $secondNumber);

        return [$question, $answer];
    };
    engineGame($calcGame, $conditionGame);
}
