<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Comments</title>
</head>
<body>
    <!-- YORUM SATIRLARI -->
    <?php

        // Single Line :  Benim tek satırlık yorum satırım. Interpreter tarafından görülmeyecek sadece programcı için yazıldı.
        # Single Line  :  Benim tek satırlık 2.yorum satırım. Interpreter tarafından görülmeyecek sadece programcı için yazıldı.
        echo "Hello World!";

        /* Multi Line : Benim çok fazla satır yorum yapabilmem için kullanılan yorum satırı bloğumdur.
         * Örneğin aşağıdaki kodun ne yaptığını açıklamak için kullanabilirim.
         *
         * X değişkeni ile Y değişkeni toplanıp ekrana yazılmıştır.
         *
         */
    $x = 10;
    $y = 5;
    echo "Total = " . ($x + $y);
    ?>
</body>
</html>