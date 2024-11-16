<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File Include</title>
</head>
<body>
    <?php
        include_once 'dahil_2edilecek_dosya.php';
        include_once 'dahil_edilecek_dosya.php';

        include 'dahil_edilecek_dosya.php';
        include 'dahil_edilecek_dosya.php';

        require 'dahil2_edilecek_dosya.php';
        require 'dahil_edilecek_dosya.php';

        require_once 'dahil_edilecek_dosya.php';
        require_once 'dahil_edilecek_dosya.php';
    ?>
</body>
</html>