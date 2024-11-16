<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Type Casting</title>
</head>
<body>
    <?php
        // FLOAT INT'E ÇEVİRME
        $floatValue = 9.99;
        $intValue = (int)$floatValue;
        var_dump($intValue); // Output : int(9)


        // STRİNG FLOAT'A ÇEVİRME
        $stringValue = "9.99";
        $floatValue2 = (float)$stringValue;
        var_dump($floatValue2); // Output : float(9.9900000000000002131628207280300557613372802734375)

        // STRİNG İNT'E ÇEVİRME
        $stringValue = "10 Minter";
        $intValue = (int)$stringValue;
        var_dump($intValue); // String değer sayıyla başlarsa eğer sayının değerini integer'e dönüştürür. Output: int(10)

        // STRİNG İNT'E ÇEVİRME_2
        $stringValue = "Minter 10";
        $intValue = (int)$stringValue;
        var_dump($intValue); // String değer metin karakterleriyle başlıyorsa eğer 0 dönderir. Output : int(0)

        // İNT,DOUBLE STRİNG'E ÇEVİRME
        $intValue = 44;
        $floatValue = 44.4;
        $intToString = (string)$intValue;
        $floatToString = (string)$floatValue;
        var_dump($intToString); // Output : string(2) "44"
        var_dump($floatToString); // Output : string(4) "44.4"

        // STRİNG,İNT BOOLEAN'A ÇEVİRME
        $stringValue = "Minter";
        $intValue = 9001;
        $stringToBoolean = (bool)$stringValue;
        $intToBoolean = (bool)$intValue;
        var_dump($intToBoolean); // Output : bool(true)
        var_dump($stringToBoolean); // Output : bool(true)
        $stringValue = "";
        $intValue = 0;
        $stringToBoolean = (bool)$stringValue;
        $intToBoolean = (bool)$intValue;
        var_dump($intToBoolean); // Output : bool(false)
        var_dump($stringToBoolean); // Output : bool(false)



    ?>
</body>
</html>