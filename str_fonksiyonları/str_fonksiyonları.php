<!doctype html>
<html lang = TR-tr>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
        <meta http-equiv="Content-Language" content="tr">
        <meta charset="utf-8">
        <title>Kamer Alperen</title>
        <body>
            <?php
            function BuyukHarfleriKucukHarflereCevir($deger){
                $Degisecekler = array("Ç","Ğ","I","İ","Ö","Ş","Ü",);
                $Degisenler   = array("ç","ç","ı","i","ö","ş","ü",);
                $Duzenle      = str_replace($Degisecekler, $Degisenler, $deger);
                $Sonuc        = strtolower($Duzenle);
                return $Sonuc;
            }

            $Icerik = "SÜLEYMAN ÇAKIR İSTANBULUN SEFİRİDİR BİAT EDİN";

            echo $Icerik . "<br>";

            $Metin = BuyukHarfleriKucukHarflereCevir($Icerik);

            echo $Metin;

            ?>
        </body>
    </head>
</html>