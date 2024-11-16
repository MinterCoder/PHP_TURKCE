<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conditional Operators</title>
</head>
<body>
    <?php
        $x = 3;
        $y = 5;
        $sonuc = $x > $y ? $x : $y;
        echo "Sonuc : $sonuc";  // Sonuc değeri 5 olacak.
    ?>
</body>
</html>