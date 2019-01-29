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
$num1 = $_GET['firstNumber'];
$num1 = (int)$num1;

$num2 = $_GET['secondNumber'];
$num2 = (int)$num2;

$operation = $_GET['operation'];

switch ($operation) {
    case 'plus':
        $result = $num1 + $num2;
        $output = ' + ';
        break;
    case 'minus':
        $result = $num1 - $num2;
        $output = ' - ';
        break;
    case 'multiply':
        $result = $num1 * $num2;
        $output = ' x ';
        break;
    case 'division':
        $result = $num1 / $num2;
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