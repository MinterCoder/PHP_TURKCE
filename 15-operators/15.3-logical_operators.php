<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logical Operators</title>
</head>
<body>
    <?php
        $x = 3;
        $y = 4;
        echo "$x && $y : " . ($x && $y) . "<br>";
        echo "$x and $y : " . ($x and $y) . "<br>";
        echo "$x || $y : " . ($x || $y) . "<br>";
        echo "$x or $y : " . ($x or $y) . "<br>";
        echo "!0 : " . !0 . "<br>";
    ?>
</body>
</html>