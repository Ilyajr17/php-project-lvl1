<?php

namespace  Brain\Games\games\calc;

use function Brain\Games\engineGame;

function calcGame(): void
{
    $conditionGame = 'What is the result of the expression?';

    $calcGame = function () {

        $firstNumber = rand(0, 5);
        $secondNumber = rand(0, 5);
        $mathematicalOperation = ['+', '-', '*'];
        shuffle($mathematicalOperation);
        $mathematicalOperation[0];


        switch ($mathematicalOperation[0]) {
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

        $question = "{$firstNumber} {$mathematicalOperation[0]} {$secondNumber}";

        return [$question, $answer];
    };
    engineGame($calcGame, $conditionGame);
}
