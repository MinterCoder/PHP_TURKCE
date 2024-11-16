<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Strings</title>
</head>
<body>
    <!--- STRİNGS -->
    <?php
        /*
            String bir karakter dizisinden oluşan metinler olarak bilinir.
            Biz string değişkenleri gösterirken "" (çift tırnak) yada '' (tek tırnak) arasına yazarak gösteririz.


        */
        # Tek tırnak ile gösterim yaparken:
        $myString = 'Minter Coder';
        echo $myString . "<br>";
        # Çift tırnak ile gösterim yaparken:
        $myString = "Minter Coder";
        echo $myString . "<br>";
        # İkisi arasındaki en önemli farklardan birisi ise bazı önemli string üzerinde yapılan işlemleri sadece "" (çift tırnak) üzerinde yapabiliyor olmamızdır.
        $myIntValue = 4;
        $myString = "Minter Coder $myIntValue"; // Şeklinde gösterim yapılabilirken
        echo $myString . "<br>";
        $myString = 'Minter Coder $myIntValue'; // Yaparsak değişken değeri 4 string değer içinde myString içerisinde gösterilmeyecektir.
        echo $myString . "<br>";

        // FONKSİYONLAR
        $myString = "Minter Coder";
        # 1. strlen(string değişkenimiz) : Bu fonksiyon dönüş değeri olarak string değişken değerimizin uzunluğunu verir.
        echo strlen($myString) . "<br>";
        # 2. strpos(string değişkenimiz,string aranacak_deger)
        echo strpos($myString,'C') . "<br>";
        # 3. str_word_count(string değişkenimiz) : Bu fonksiyon ile verdiğimiz string değişkende kaç tane kelime olduğunu bulur.
        echo str_word_count($myString) . "<br>";
        # 4. strtolower(string değişkenimiz) : Bu fonksiyon ile verdiğimiz string değişkenin hepsini küçük harflerle yazar.
        echo strtolower($myString) . "<br>";
        # 5. strtoupper(string değişkenimiz) : Bu fonksiyon ile verdiğimiz string değişkenin hepsini büyük harflerle yazar.
        echo strtoupper($myString) . "<br>";
        # 6. str_replace(string değiştirilecek_kelime,string eklenecek_kelime,string değişkenimiz) : Bir string üzerinde bulunan bazı karakterlerin yerini değiştirir.
        echo str_replace("Coder","Coding",$myString) . "<br>";
        # 7. strrev(string değişkenimiz) : Bu fonksiyon ile verdiğimiz string değişken tersten yazdırılacaktır.
        echo strrev($myString) . "<br>";
        # 8. trim(string değişkenimiz) : Bu fonksiyon ile verdiğimiz string değerin başında yada sonunda whitespace(boşluk) karakterleri varsa hepsini silecektir.
        $x = " Minter Coder ";
        echo trim($x) . "<br>";
        # 9. explode(string hangi_karakterden_bolunsun,string değişkenimiz) : Bu fonksiyon hangi karakterden bolunsun yerini vererek string'i array'e çevirir.
        print_r(explode(" ",$myString)); echo "<br>";
        # 10. substr(string değişkenimiz,int hangi_index,int kac_karakter) : Bu fonksiyon sayesinden hangi indexten başlayıp kaç karaktere kadar string değeri alacağımız gösterir.
        echo substr($myString,3,5) . "<br>";


    ?>
</body>
</html>