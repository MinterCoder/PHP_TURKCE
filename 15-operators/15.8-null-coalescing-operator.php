<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Null Colaescing</title>
</head>
<body>
<?php
    # $sonuc = $_GET['username'] ?? 'Misafir'; // Eğer ki GET ile aldığımız username değeri null ise Misafir olarak $sonuc'a atar.Null değilse GET ile gelen username değerini sonuc değişkenine atar.

    # PHP sürümünüz 7'den üst ise bu operator yerine isset() fonksiyonu ile ternary operatorünü kullanabilirsiniz.
    $sonuc = isset($_GET['username']) ? $_GET['username'] : 'Misafir';

?>
</body>
</html>