<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Switch</title>
</head>
<body>
    <?php
        $myNumber = 9900;
        // IF-ELSE
        if ($myNumber == 0){
            echo "MyNumber is 0";
        }elseif($myNumber == 1){
            echo "MyNumber is 1";
        }elseif($myNumber == 9900) {
            echo "MyNumber is 9900";
        }else{
            echo "MyNumber is unknown";
        }
        // SWITCH CASE
        switch($myNumber){
            case 0:
                echo "MyNumber is 0";
                break;
            case 1:
                echo "MyNumber is 1";
                break;
            case 9900:
                echo "MyNumber is 9900";
                break;
            default:
                echo "MyNumber is unknown";
        }
    ?>
</body>
</html>