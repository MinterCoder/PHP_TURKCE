<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array Operators</title>
</head>
<body>
<?php
    // Birleştirme (+) Operatorü
    $a = array("a" => 1, "b" => 2);
    $b = array("b" => 3, "c" => 4);

    $result = $a + $b;
    print_r($result); echo "<br>";

    // Karşılaştırma operatorü (== ve ===)
    $array1 = array("a" => 1, "b" => 2);
    $array2 = array("b" => 2, "a" => 1);

    var_dump($array1 == $array2); echo "<br>";
    var_dump($array1 === $array2); echo "<br>";
    var_dump($array1 != $array2); echo "<br>";
    var_dump($array1 <> $array2); echo "<br>";
    var_dump($array1 !== $array2); echo "<br>";

?>
</body>
</html>