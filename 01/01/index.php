<?php
include __DIR__ . '/constants.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Work 03.01</title>
</head>
<body>
<h1>
    Home Work 03.01
</h1>

<form method="GET" action="/01/01/result.php">
    <input type="text" name="firstNumber" placeholder="Первое число">
    <select name="operation">
        <option value="<?php echo PLUS ?>"> +</option>
        <option value="<?php echo MINUS ?>"> -</option>
        <option value="<?php echo MULTIPLY ?>"> x</option>
        <option value="<?php echo DIVISION ?>"> /</option>
    </select>
    <input type="text" name="secondNumber" placeholder="Второе число">
    <input type="submit" value=" = ">
</form>

</body>
</html>