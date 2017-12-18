<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--<p>15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое
    число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
    На экран выводить результат в зависимости от значений этих переменных. Не забудьте про
    деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
</p>-->
<form action="15.php" method="post" style="display: block;">
    <div>
        <label for="a">Enter 'a' value:</label>
        <input type="text" name = "a" placeholder="Enter number" />
    </div>
    <br />
    <div>
        <label for="Select operator">Select operator:</label>
        <select name="operators">
            <option value="" hidden>Select operator...</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
            <option value="%">%</option>
        </select>
    </div>
    <br />
    <div>
        <label for="b">Enter 'b' value:</label>
        <input type="text" name = "b" placeholder="Enter number" />
    </div>
    <br />
    <div>
        <input type="submit" value="Submit" />
    </div>
</form>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 11.12.2017
 * Time: 19:09
 */

$a = $_POST['a'];
$o = $_POST['operators'];
$b = $_POST['b'];
if ((($o == '/') && ($b == 0)) || (($o == '%') && ($b == 0))) {
    echo "Divided by 0 don't permition.";
    exit;
}
switch ($o){
    case '+':
        $res = $a + $b;
        break;
    case '-':
        $res = $a - $b;
        break;
    case '/':
        $res = $a / $b;
      break;
    case '*':
      $res = $a * $b;
      break;
    case '%':
      $res = $a % $b;
      break;
}
echo "<br /> Result is: <b> $res </b>";