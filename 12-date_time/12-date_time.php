<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Date & Time</title>
</head>
<body>
    <!--  DATE & TİME -->
    <?php
        // PHP'de tarih ve zamanı göstermek için bazı fonksiyonlar vardır. Sırasıyla bu fonksiyonları inceleyelim.
        /*
            date() fonksiyonu : Tarih'in formatlanmış şekilde geri dönderilmesini sağlar.İçerisine bazı string argumanları vermemiz gerekecek.

            Tarih için kullanılan argümanlardan bazıları;
            - d - Ayın gününü belirtir.
            - m - Ay'ın sayı değerini gösterir.Kaçıncı ay ?
            - Y - Yıl'ı 4 rakam olacak şekilde gösterir. (2024)
            - l - Haftanın gününü gösterir. (Friday)

            Zaman için kullanılan argümanlardan bazıları:
            - H - 24-saatlik formatda saati gösterir. (00-23)
            - h - 12-saatlik formatda saati gösterir. (01-12)
            - i - Dakika'yı gösterir.
            - s - Saniyeyi gösterir.

        */
        echo date('Y/m/d') . "<br>"; // Output:  2024/11/15
        echo date('Y-m-d') . "<br>"; // Output:  2024-11-15
        echo date('Y.m.d') . "<br>"; // Output:  2024.11.15
        echo date('H:i:s') . "<br>"; // Output:  20:24:55
        echo date('l') . "<br>";     // Output:  Friday

        $d = mktime(10,43,2,3,12,2099);
        echo $d . "<br>";
        echo "Tarihimiz " . date("Y-m-d h:i:sa", $d); // Output: Tarihimiz 2099-03-12 10:43:02am
    ?>
</body>
</html>