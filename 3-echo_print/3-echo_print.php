<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Echo ve Print</title>
</head>
<body>
    <?php
    /*
    PHP'de echo ve print dil yapısı olarak web'de çıktı vermek için kullanılır.

    echo syntax
    SYNTAX -> echo(string ...$expressions): void

    echo ifadesi, bir veya birden fazla ifade'yi yani içerisine ne yazmak isterseniz onları alıp çıktıyı ekrana basar geri dönüş olarak da hiçbir şey yani (void) kullanılır.

    Expressions olarak girilen değerler "" (çift tırnak) yada '' (tek tırnak) arasına yazılır.
    Çift tırnak ve tek tırnak arasına yazılan ifadelerde çok önemli bir fark vardır. Aşağıdaki örnekte çok daha iyi gösteriliyor.Siz bir değişkeni tek tırnak içerisinde gösteremezsiniz. Plain text olarak görecektir.

    */
        $name = "Minter Coder";
        echo "Hello " . $name . ". Welcome to PHP world" . "<br>";
        echo 'Hello ' . $name . ". Welcome to PHP world" . "<br>";
        echo "Hello $name." . "<br>"; // Burda çıktıda Hello Minter Coder yazar.
        echo 'Hello $name.' . "<br>"; // Burda çıktıda Hello $name yazacaktır. Değişkenin değerini göstermeyecektir.


        // İfadeleri ayrı ayrı da yazabiliriz.
        echo "Hello" . $name . ". Naber ?". "Nasıl Gidiyor ?" . "<br>";
        echo "Hello" , $name , ". Naber ?", "Nasıl Gidiyor ?" . "<br>";

        echo 'Hello' , $name , '. Naber ?', 'Nasıl Gidiyor ?' . "<br>";
        echo 'Hello' . $name . '. Naber ?'. 'Nasıl Gidiyor ?' . "<br>";

        $donen_deger = print "Minter Coder"; // ÇIKTIYA hem Minter Coder yazacak hem de dönen 1 değerini donen_deger değişkenine atacak.
        print $donen_deger; // Çıktıda 1 yazacak.
        print "Minter Coder";
        # print "Kerem" , "Naber"; // Hata verecektir birden fazla ifade alıyor.

        print "
            Print'de çok fazla
            satırlı
            yazı yazabiliriz. Bunu Tarayıcınızda göremeyebilirsiniz.
            CTRL+U yaparak alt alta yazdığı satırları source code'dan görüntüleyebilirsiniz.
        "
    ?>
</body>
</html>