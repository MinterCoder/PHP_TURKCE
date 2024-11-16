<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Decision Making</title>
</head>
<body>
    <?php
        // NOT HARF UYGULAMASI
        $myNote = 85;
        if ($myNote >= 85) {
            echo "Notunuz AA";
        }elseif ($myNote >= 70) {
            echo "Notunuz AB";
        }elseif ($myNote >= 60) {
            echo "Notunuz BB";
        }else{
            echo "Kaldınız!";
        }
        // TEK-ÇİFT UYGULAMASI
        $myNumber = 12;
        if ($myNumber % 2 == 0){
            echo "Bu bir çift sayıdır.";
        }else {
            echo "Bu bir tek sayıdır.";
        }


    ?>
</body>
</html>