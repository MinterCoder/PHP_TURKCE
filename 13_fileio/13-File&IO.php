<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File - I&O</title>
</head>
<body>
    <?php

        $myfile = fopen("fileio.txt","r"); // Dosyayı okuma modunda açıyoruz.
        fclose($myfile); // Dosyayı kapatıyoruz.
    ?>
</body>
</html>