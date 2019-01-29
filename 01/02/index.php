<?php
const PLUS = 'plus';
const MINUS = 'minus';
const MULTIPLY = 'multiply';
const DIVISION = 'division';

include __DIR__ . '/functions.php';

if (isset($_GET['firstNumber'])) {
    $num1 = (int)$_GET['firstNumber'];
} else {
    $num1 = 0;
}

if (isset($_GET['secondNumber'])) {
    $num2 = (int)$_GET['secondNumber'];
} else {
    $num2 = 0;
}

if (isset($_GET['operation'])) {
    $operation = $_GET['operation'];
} else {
    $operation = PLUS;
}

$result = calculate($num1, $num2, $operation);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Work 03.02</title>
</head>
<body>
<h1>
    Home Work 03.02
</h1>

<table>
    <tr>
        <td>
            <form method="get" action="/01/02/index.php">
                <input type="text" name="firstNumber" placeholder="Первое число"
                       value="<?php echo 0 === $num1 ? '' : $num1; ?>">
                <select name="operation">
                    <option value="plus"
                        <?php echo selectThis($operation, PLUS) ?>> +
                    </option>
                    <option value="minus"
                        <?php echo selectThis($operation, MINUS) ?>> -
                    </option>
                    <option value="multiply"
                        <?php echo selectThis($operation, MULTIPLY) ?>> x
                    </option>
                    <option value="division"
                        <?php echo selectThis($operation, DIVISION) ?>> /
                    </option>
                </select>
                <input type="text" name="secondNumber" placeholder="Второе число"
                       value="<?php echo 0 === $num2 ? '' : $num2; ?>">
                <input type="submit" value=" = ">
            </form>
        </td>
        <td>
            <div>
                <?php echo $result; ?>
            </div>
        </td>
    </tr>
</table>


</body>
</html>