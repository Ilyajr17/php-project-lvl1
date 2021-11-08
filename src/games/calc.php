<?php

namespace  Brain\Games\games\calc;

use function Brain\Games\engineGame;

function calcGame(): void
{
    $conditionGame = 'What is the result of the expression?';

    $calcGame = function () {

        $firstNumber = rand(0, 5);
        $secondNumber = rand(0, 5);
        $mathematicalOperationRundom = ['+', '-', '*'];
        shuffle($mathematicalOperationRundom);
        $mathematicalOperation = $mathematicalOperationRundom[0];


        switch ($mathematicalOperation) {
            case '+':
                $answer =  "{$firstNumber}" + "{$secondNumber}";
                break;
            case '-':
                $answer = "{$firstNumber}" - "{$secondNumber}";
                break;
            case '*':
                $answer = "{$firstNumber}" * "{$secondNumber}";
                break;
        }

        $question = "{$firstNumber} {$mathematicalOperation} {$secondNumber}";

        return [$question, $answer];
    };
    engineGame($calcGame, $conditionGame);
}
