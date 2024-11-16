<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>While</title>
</head>
<body>
    <?php
        $i=0;
        while($i<=30){
            echo "$i<br>";
            $i++;
        }

        $myProgrammingLanguages = array("PHP","C#");
        $i=0;
        while($i<=count($myProgrammingLanguages)-1){
            echo "$myProgrammingLanguages[$i]<br>";
            $i++;
        }
    ?>
</body>
</html>