<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Type Juggling</title>
</head>
<body>
    <!-- TYPE JUGGLİNG -->
    <?php
    /*
     * PHP dynamic typed programlama dilidir.Bir verinin türü otomatik olarak php'de, dynamic bir şekilde değişir.Bu özelliğe type juggling denir.
     *
     * ÖRNEK 1
     */
    $arrayVariable = [1,2,3,4];
    echo "Type : " . gettype($arrayVariable) . "<br>";
    $boolVariable = false;
    echo "Type : " . gettype($boolVariable) . "<br>";
    $intVariable = 12;
    echo "Type : " . gettype($intVariable) . "<br>";
    $floatVariable = 3.14;
    echo "Type : " . gettype($floatVariable) . "<br>";
    /*
     *  ÇIKTILAR SIRASIYLA.
        Type : array
        Type : boolean
        Type : integer
        Type : double
     * */
    # Örnekte de görüldüğü üzere her bir değişkenin türü otomatik olarak değişmektedir. PHP'de bu özelliğe "type juggling" denir.

    # ÖRNEK 2
    $intVal = 1;
    $stringVal = "10";
    $sum = $intVal + $stringVal;
    var_dump($sum); // Output : int(11)

    # ÖRNEK 3 - TYPE CASTİNG VS TYPE JUGGİNG
    $var1=100;
    $var2=(boolean)$var1;
    $var3=(string)$var1;
    $var4=(array)$var1;
    $var5=(object)$var1;
    var_dump($var2, $var3, $var4, $var5);
    /*
    int(11) bool(true) string(3) "100" array(1) { [0]=> int(100) } object(stdClass)#1 (1) { ["scalar"]=> int(100) }

    */

    ?>
</body>
</html>