<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Алгоритм на PHP</title>
</head>
<body>
<form action= "AlgorithmPHP.php" method= "POST">
    <p><b>Введите число:</b><br>
    <input type="text" name="integer" size="40">
    <p><input type="submit" value="Отправить"></p>
</form>

<?php

$integer=$_POST['integer'];

$a = 1;
$b = 1;
$p = $integer;

if ($a > $p) {
    if ($a == $p) {
        echo "задуманное число входит в числовой ряд";
    } else {
        
    }
} else {
    echo "задуманное число НЕ входит в числовой ряд";
}


?>

</body>
</html>
