<!DOCTYPE html>
<html>
<head>
    <title>Data Types (Veri Tipleri)</title>
</head>
<body>
    <!-- Data Types (Veri Tipleri) -->
    <?php
    /*
    Data types, verilerin farklı türlerde kategorilendirilmesi anlamına gelir.
    * PHP toplamda 8 tane veri tipine sahiptir.

    1. Integers -> Tam sayılar, örneğin 9001,123,-1 gibi.
    2. Doubles -> Kayan sayılar, örneğin 10.25,44.53
    3. Booleans -> 2 tane tek değere sahiptir. true,false
    4. NULL -> Sadece bir değere sahip özel bir data type'dır boş bir değere sahiptir.
    5. Strings -> Karakterlerin birleşmesinden oluşan veri tipidir. Metinsel ifadelerde kullanılır. Örneğin "Minter Coder"
    6. Arrays -> Birden fazla veri tipinin bir yerde sıralı bir şekilde indexlenmiş halde bulunmasını sağlayan veri tipidir.
    7. Objects -> Yazılımcı taraflı yazılmış classların yada built-in bulunan classlardan örnekler elde etmede kullanılan veri tipidir.
    8. Resources -> PHP de dış taraflı kaynaklarda bulunan değişkenleri kullanmada işe yarar örneğin veritabanına bağlanmak için credentialsları almada kullanılabilir.


    Note : İlk 5'i simple data type'dır, diğer ikisi (arrays ve objects) compound türdendir.


    #### Integers
    PHP Tam sayıları kullanmak için işe yarayan bir veri tipleri "int" türündendir.
    * decimal (10 tabanında), hexadecimal (16 tabanında), octal (8 tabanında), binary (2 tabanında) gösterilebilirler.
    * Hexadecimal "0x" ile başlar.
      Octal "0o" ile başlar.
      Binary "0b" ile başlar.

    * Örneğin
        Decimal − 201, 4195, -15
        Octal  − 0010, 0O12, -0O21
        Hexadecimal − 0x10, -0x100
        Binary − 0b10101, -0b100
    */

    // INTEGERS : PHP Tam sayıları kullanmak için işe yarayan bir veri tipleri "int" türündendir.
    $myIntValue = 12;
    $myHexadecimalValue = 0x10;
    $myBinaryValue = 0x100;
    $myOctalValue = 0x1000;
    echo "Int value : " . $myIntValue . " Hexadecimal : " . $myHexadecimalValue . " Binary : " . $myBinaryValue . " Octal : " . $myOctalValue . "<br>";

    // DOUBLES : Double değişkenler kayan sayılar (floating point numbers - float) olarak bilinir.
    $myFloatValue = 12.34;
    echo "My float value : " . $myFloatValue . "<br>";

    /* BOOLEANS : "bool" veri tipi daha çok bir şeyi sınamada kullanılır.
    Yani bir şey doğru mu yanlış mı bunu belirtmede kullanabiliriz.
     Örneğin 18 yaşından büyük mü değil mi gibi... Bu yüzden 2 tane değer alır "true" ve "false".
    Bu değerler yerine true'yi göstermek için 1 yada false'yi göstermek için 0 kullanabiliriz. C dilindeki gibi...
    true->1
    false->0

    Diğer veri türlerine göre Booleans değerlerini kıyaslamak için birkaç kural vardır;

    Eğer ki değer bir sayı ise, ve sayı değeri 0 ise bool değeri false olur 0'dan farklı bir değer ise true döner.
    Eğer ki değer bir string ise, string içerisi boş ise yada string değeri "0" ise false döner, farklı bir değer ise true döner.
    NULL değeri her zaman false'dir.
    Eğer ki değer bir array ise, eğer ki array herhangi bir değer içermiyorsa false,diğer durumda ise true'dir.
    Note olarak da double değerleri boolean için kullanmayın.
    */
    $myBoolValue = true;
    $mySecondBoolValue = false;
    echo "My bool value : " . $myBoolValue . " second bool value : " . $mySecondBoolValue . "<br>";
    $myNumberBoolValue = 1;
    $myNumberSecondBoolValue = 0;
    echo "My number bool value : " . $myNumberBoolValue . " second bool number value : " . $myNumberSecondBoolValue . "<br>";

    // STRİNGS : String veri tipi karakterlerin birleştirilmesinden oluşan metinsel ifadelerdir.
    $string_1 = "String degerimi çift tırnaklar arasında yazabilirim.";
    $string_2 = 'String değerimi tek tırnak arasında da yazabilirim.';
    $bos_string = "";
    echo $string_1 . "<br>";

    // NULL : NULL özel hiçbir şeye hiçbir değere sahip olmayan bir veri türü demektir.Genelde bir değişkeni başlatmamız gerektiğinde bunu kullanırız. Örneğin bir class tanımladık ve database'ye bağlantısını gerçekleştirmek için bir property tanımlarsak bunu öncelikle boş yaparız, NULL, daha sonra değişken atamada kullanırız.
    $my_var = null;
    $my_second_var = NULL;

    /* ARRAYS : PHP'de arraylar sıralı bir veri türü olarak kullanılır.."Key-Value" şeklinde yada "indexed" arrays olarak 2'ye ayrılırlar.
    array() fonksiyonunu kullanarak yada köşeli parantezler "[]" kullanarak bir array tanımlayabiliriz.

 */

    // Key-Value pairs arrayleri tanımlamak için
    $myArray = array(
      "name" => "Minter",
      "surname" => "Coder",
    );
    $mySecondArray = [
        "name"=>"Minter",
        "surname"=>"Coder",
    ];
    // Indexed arrayleri tanımlamak için
    $myProgrammingLanguages = ["C#","PHP"];
    $myProgrammingLanguages = array("C#","PHP",44,12);
    echo $myProgrammingLanguages[0] . "<br>";

    // Objects : Programcının oluşturduğu yada built-in classlardan bir örnek oluşturmak için kullanılır.
    class Employee {
        function getEmployeeName(){
            echo "Coder";
        }
    }
    $obj = new Employee(); // $obj bir object türüdür
    $obj->getEmployeeName();
    ?>
</body>
</html>