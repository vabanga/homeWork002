<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Алгоритм на PHP</title>
</head>
<body>
<form action= "" method= "POST">
    <p><b>Введите число:</b><br>
        <input type="text" name="integer" size="40">
    <p><input type="submit" value="Отправить" name="sub"></p>
</form>

<?php

$integer = htmlspecialchars($_POST['integer']);

$a = 1;
$b = 1;
$p = $integer;

if (isset($_POST['sub'])) {
    if($a > $p) {
        echo "задуманное число НЕ входит в числовой ряд";
    } else {
        if($a == $p) {
            echo "задуманное число входит в числовой ряд";
        } else {
            while ($p < 10000000) {
                $p = $a;
                $a + $b;
                $b = $p;

                if (isset($_POST['sub'])) {
                    if($a > $p) {
                        echo "задуманное число НЕ входит в числовой ряд";
                        break;
                    } else {
                        if($a == $p) {
                            echo "задуманное число входит в числовой ряд";
                            break;
                        } else {
                            while ($p < 10000000) {
                                $p = $a;
                                $a + $b;
                                $b = $p;
                                break;
                            }
                        }
                    }

                }
            }
        }
    }

}

?>

</body>
</html>
