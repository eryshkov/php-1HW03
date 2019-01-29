<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Результат</title>
</head>
<body>
<?php
include __DIR__ . '/constants.php';

$num1 = $_GET['firstNumber'];
$num1 = (int)$num1;

$num2 = $_GET['secondNumber'];
$num2 = (int)$num2;

$operation = $_GET['operation'];

switch ($operation) {
    case PLUS:
        $result = $num1 + $num2;
        $output = ' + ';
        break;
    case MINUS:
        $result = $num1 - $num2;
        $output = ' - ';
        break;
    case MULTIPLY:
        $result = $num1 * $num2;
        $output = ' x ';
        break;
    case DIVISION:
        $result = (0 !== $num2) ? $num1 / $num2 : 'division by zero';
        $output = ' / ';
        break;
    default:
        $result = null;
}

if ($result !== null) {
    echo $num1 . $output . $num2 . ' = ' . $result;
} else {
    echo 'Erroneous operation';
}

?>
</body>
</html>