<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Foreach</title>
</head>
<body>
    <?php
        $myLanguages = array("C#","PHP","Nim");
        foreach($myLanguages as $language){
            echo "$language<br>";
        }
        $myPL = array(
                "1"=>"PHP",
                "2"=>"Nim",
                "3"=>"C#",
        );
        foreach($myPL as $key=>$value){
            echo "$key: $value<br>";
        }
    ?>
</body>
</html>