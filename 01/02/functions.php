<?php

function calculate($num1, $num2, $operation)
{
    switch ($operation) {
        case PLUS:
            $result = $num1 + $num2;
            break;
        case MINUS:
            $result = $num1 - $num2;
            break;
        case MULTIPLY:
            $result = $num1 * $num2;
            break;
        case DIVISION:
            $result = $num1 / $num2;
            break;
        default:
            $result = null;
    }

    if ($result !== null) {
        return $result;
    }

    return null;
}

function selectThis($operation, $as)
{
    if ($as === $operation) {
        return ' selected="selected"';
    }

    return null;
}