<!doctype html>
<html lang = TR-tr>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
        <meta http-equiv="Content-Language" content="tr">
        <meta charset="utf-8">
        <title>Kamer Alperen</title>
        <body>
            <?php
            function IlkHarfiBuyukHarfeCevir($deger){
                $Uzunluk                = strlen($deger);
                $IlkharfiBul            = mb_substr($deger,0,1, "UTF-8");
                $KalanIcerigiBul        = mb_substr($deger, 1, $Uzunluk, "UTF-8");
                $KucuktenBuyugeDegisecekler             = array("ç","ğ","ı","i","ö","ş","ü");
                $KucuktenBuyugeDegisenler               = array("Ç","Ğ","I","İ","Ö","Ş","Ü");
                $BuyuktenKucugeDegisecekler             = array("Ç","Ğ","I","İ","Ö","Ş","Ü");
                $BuyuktenKucugeDegisenler               = array("ç","ğ","ı","i","ö","ş","ü");
                $IlkHarfiDuzenle                        = strtoupper(str_replace($KucuktenBuyugeDegisecekler, $KucuktenBuyugeDegisenler, $IlkharfiBul));
                $KalanIcerigiDuzenle                    = strtolower(str_replace($BuyuktenKucugeDegisecekler, $BuyuktenKucugeDegisenler, $KalanIcerigiBul)); 
                $Birlestir                              = $IlkHarfiDuzenle . $KalanIcerigiDuzenle;
                return $Birlestir ;
            }

            $Icerik = "ıSPANAK YEMEĞİ ÇOK GÜZEL BİR YEMEKTİR, YEYİN <3";

            echo $Icerik . "<br>";

            $Metin = IlkHarfiBuyukHarfeCevir($Icerik);

            echo $Metin;

            ?>
        </body>
    </head>
</html>