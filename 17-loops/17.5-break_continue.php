<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Break</title>
</head>
<body>
    <?php
        for($i=1;$i<=5;$i++){
            if ($i == 3) {
                break;
            }
            echo $i . "<br>";
        }

        for($i=1;$i<=5;$i++){
            if ($i == 3) {
                continue;
            }
            echo $i . "<br>";
        }
    ?>
</body>
</html>