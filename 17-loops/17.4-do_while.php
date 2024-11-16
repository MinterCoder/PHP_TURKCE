<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Do While</title>
</head>
<body>
    <?php
        $i=0;
        do{
            echo $i . "<br>";
            $i++;
        }while($i<0);
        $i=0;
        do{
            echo $i . "<br>";
            $i++;
        }while($i<30);
    ?>
</body>
</html>