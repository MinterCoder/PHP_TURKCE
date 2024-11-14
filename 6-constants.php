<?php

/*
    PHP'de constant (sabitler) bir değer için bir isimdir. Eğer ki bir sabit değişkene bir değer atanırsa, bu değer artık değiştirilemez.

    PHP'de genel olarak Sabit değişkenler her zaman büyük harflerle yazılır.
    PHP'de sabit değişkenleri tanımlarken $ kullanılmaz.
    Bir sabit değişken tanımlamak istersek; 2 yöntem kullanabiliriz.
 */
define("PI",3.14);
const pi = 3.14;

/*
    define() fonksiyonunu inceleyecek olursak, bu bir constant değeri runtime'da belirlemek için kullanılır.
    SYNTAX -> define(string $const_name, mixed $value, bool $case = false): bool

    içerisine aldığı parametrelere bakacak olursak;

    $const_name = Sabit değişkenin ismidir. Yukarıdaki örnekte yazdığımız PI'dir.
    $value = Sabit değişkenin değeridir.int,float,bool,string,null yada bir array olabilir.
    $case = Eğer ki bu true olarak ayarlanırsa sabit değişken case-insensitive (büyük-küçük harfe duyarsız) olarak ayarlanacak. pi ile PI aynı olmuş olacak eğer ki default'da bırakmak istersek case-sensitive (büyük-küçük harfe duyarlı olacaktır.)
*/
define("MYCONSTANT",50,true);
echo MYCONSTANT . "<br>";
if (defined('MYCONSTANT')) {
    echo "MYCONSTANT isimli bir sabit değişken tanımlanmıştır";
}
# defined(string $constant_name) , sabit değişken değerini alıp böyle bir sabit tanımlanıp tanımlanmadığını kontrol eder.
?>