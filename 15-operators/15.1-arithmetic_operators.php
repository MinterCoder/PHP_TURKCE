<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arithmetic Operators</title>
</head>
<body>
    <?php
        $x = 3;
        $y = 5;
        echo "+ operator : " . ($x + $y) . "<br>";
        echo "- operator : " . ($x - $y) . "<br>";
        echo "* operator : " . ($x * $y) . "<br>";
        echo "/ operator : " . ($x / $y) . "<br>";
        echo "% operator : " . ($x % $y) . "<br>";
        echo "x yeni değer x++ ";
        $x++;// x'i 1 arttırır.Yeni değeri 4 olur.
        echo $x . "<br>";
        echo "y yeni değer y-- ";
        $y--; // y'i 1 azaltır.Yeni değeri 4 olur.
        echo $y . "<br>";
    ?>
</body>
</html>