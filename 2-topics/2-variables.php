<!DOCTYPE html>

<html lang="tr">

<head>
    <title>Variables</title>
</head>
<body>
    <!--- DEĞİŞKENLER -->
    <?php
        /*
            Değişkenler ram üzerinde bir verinin bellekteki yerini tutmak için kullanılır.
        * PHP'de değişken tanımlamak için $ kullanılır. Örneğin $değisken_ismi=degeri
        * PHP'de değişkenleri case-sensitive'dir yani $age ile $Age farklı değişkenlerdir.
        * PHP'de değişken isimleri bir harfle yada _ ile başlamalıdır sayı yada başka bir özel karakterle başlaması halinde hata verir. Örneğin: $name $benim_ismim $_telefonNo gibi değişkenler geçerlidir $1name $senin ismin $AgeAge#1 geçersizdir.
        * PHP dynam```ic typed bir dil olduğu için eğer ki başka bir programlama dilinden geliyorsanız tip belirtmek zorundasınız mesela C# da bir integer değer tanımlamak isterseniz "int degisken_ismi" demeniz lazım fakat php'de dynamic typed özelliğinden dolayı tipini belirlemeseniz de olur.
        $name = "Pentester";
        */
        $name = "Kerem";
        $surname = "Sarmış";
        echo "Your name is " . $name . " surname is : " . $surname . "<br>";

        $x = 12;
        $y = 15;
        echo "Sum : " . ($x + $y) . "<br>";

        /*
            Assigned by Value Variables
            PHP'de değişkenler her zaman değer ile atama gerçekleştirir. Bizim yukarıda yaptığımız name ve surname gibi değişkenlerde değr ile atanan değişkenlerdir.
        */
        $myX = 15;
        $myY = 20;
        $myZ = $myX+$myY;
        echo "My z variable value = " . $myZ . "<br>"; // 35
        $myY = 30;
        echo "My z variable value = " . $myZ . "<br>"; // 35

        /*
            Assigning Values by Reference Values
        */
        $myX = 15;
        $myY = &$myX; // myX değişkeninin bellekteki yeri myY'ye atandı.
        $myZ = $myX + $myY; // 30 olacak.
        echo "My z variable value = " . $myZ . "<br>";
        $myY = 30; // artık myX'in değeri de değişmiş olacak.
        $myZ = $myX+$myY;
        echo "My z variable value = " . $myZ . "<br>"; // 60
    ?>
</body>
</html>