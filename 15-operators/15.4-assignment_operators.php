<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment Operators</title>
</head>
<body>
    <?php
        $x = 3;
        $x += 4; // $x = $x + 4 açılımıdır sonuç 7'dir.
        echo "$x += 4 : " . $x . "<br>";

        // Yeni sonuç 7'den devam.
        $x -= 5; // $x = $x - 5 açılımıdır sonuç 2'dir.
        echo "$x -= 5 : " . $x . "<br>";

        // Yeni sonuç 2'den devam.
        $x *= 9; // $x = $x * 9 açılımıdır sonuç 18'dir.
        echo "$x *= 9 : " . $x . "<br>";

        // Yeni sonuç 18'den devam.
        $x /= 3; // $x = $x / 3 açılımıdır sonuç 6'dır.
        echo "$x /= 3 : " . $x . "<br>";

        // Yeni sonuç 6'dan devam.
        $x %= 2; // $x = $x % 2 açılımıdır sonuç 0'dır.
        echo "$x %= 2 : " . $x . "<br>";

    ?>
</body>
</html>