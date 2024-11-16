<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>For</title>
</head>
<body>
    <?php
        for($i = 0; $i < 30; $i++){
            if ($i % 2 == 0){
                echo "Çift sayı : $i <br>";
            }
        }
    ?>
</body>
</html>