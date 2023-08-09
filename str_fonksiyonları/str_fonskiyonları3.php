<!doctype html>
<html lang = TR-tr>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
        <meta http-equiv="Content-Language" content="tr">
        <meta charset="utf-8">
        <title>Kamer Alperen</title>
        <body>
            <?php
            function HerKelimeninIlkHarfiniBuyukHarfYap($deger){
                $Parcala                                = explode(" ", $deger);
                $KelimeSayisi                           = count($Parcala);
                $KucuktenBuyugeDegisecekler             = array("ç","ğ","ı","i","ö","ş","ü");
                $KucuktenBuyugeDegisenler               = array("Ç","Ğ","I","İ","Ö","Ş","Ü");
                $BuyuktenKucugeDegisecekler             = array("Ç","Ğ","I","İ","Ö","Ş","Ü");
                $BuyuktenKucugeDegisenler               = array("ç","ğ","ı","i","ö","ş","ü");
                $Sayi                                   = 1;
                $Duzenle                                ="";
                $Sonuc                                  ="";

                foreach($Parcala as $Kelime){
                    $TemizKelime            = trim($Kelime);
                    $Uzunluk                = strlen($TemizKelime);
                    $IlkharfiBul            = mb_substr($TemizKelime, 0 ,1 , "UTF-8");
                    $KalanIcerigiBul        = mb_substr($TemizKelime, 1, $Uzunluk, "UTF-8");
                    $IlkHarfiDuzenle        = strtoupper(str_replace($KucuktenBuyugeDegisecekler, $KucuktenBuyugeDegisenler, $IlkharfiBul));
                    $KalanIcerigiDuzenle    = strtolower(str_replace($BuyuktenKucugeDegisecekler, $BuyuktenKucugeDegisenler, $KalanIcerigiBul)); 
                    $Duzenle                .= $IlkHarfiDuzenle . $KalanIcerigiDuzenle . " ";
                    
                    if($Sayi==$KelimeSayisi){
                        $Sonuc          .= $Duzenle;
                        return mb_convert_case(trim($Sonuc) , MB_CASE_TITLE, "UTF-8");
                    }
                    
                    $Sayi++;
                }  
            }

            /*
            $Icerik = "ıSPANAK YEMEĞİ ÇOK GÜZEL BİR YEMEKTİR, YEYİN <3";
            echo $Icerik . "<br>";
            $Metin = HerKelimeninIlkHarfiniBuyukHarfYap($Icerik);
            echo $Metin. "<br><br><br>";


            $Icerik2        =   "kamer.alperen@gmail.com";
            echo "Web sitesinden çekmek istediğniz e-mail adresi: " . $Icerik2 . "<br>";
            $Oncesi         =   strstr($Icerik2, "@", true); //strstr yerine strchr() metodu da aynı işlemi görür.
            $Sonrasi        =   strstr($Icerik2, "@");
            $Duzenle2        =  substr($Sonrasi, 1);
            echo $Oncesi . "<br>";
            echo $Duzenle2 . "<br><br><br>";
            
            


            $GelenDeger         =   "+905469458919"; // telefon numarası +90 ile başlayabilir veya kullanıcı 0 ile başlatabilir sondan 10 hane bizim kesin istediğimiz sonuç olduğu için substr() ile -10 değeri verdik.
            $Son10Hane          =   substr($GelenDeger, -10);
            $TelefonNosu        =   "0" . $Son10Hane;

            $AlanKodu           =   substr($TelefonNosu, 0, 4);
            $BirinciBlok        =   substr($TelefonNosu, 4, 3);
            $IkinciBlok         =   substr($TelefonNosu, 7, 2);
            $UcuncuBlok         =   substr($TelefonNosu, 9, 2);

            echo "(" . $AlanKodu . ")" . " " . $BirinciBlok . " " . $IkinciBlok . " " . $UcuncuBlok;
            

            $KartNumarasi       =   "1234567890123456";
            $Islem              =   str_split($KartNumarasi, 4);
            $BlokSayisi         =   1;
            echo "İşlem yapılan kredi kartı numarası: ";

            foreach($Islem as $parametre){
                if(($BlokSayisi==2) or ($BlokSayisi==3)){
                     echo "**** ";
                    }else{
                        echo $parametre . " ";
                    }
                    $BlokSayisi++;
            } 
            // 2. ve 3. bloklara * koyarak yazmayı sağlar. Bunun yerine döngüsüz yapmak istersen de str_split() metodu gelen değeri verilen değer koşulunda dizi haline dönüştürdüğü için aşağıdaki gibi de yazılabilir
            echo "<br>";
            echo $Islem[0] . " **** **** " . $Islem[3];
            

            $Metin  =   "Spor yapmayı ve ağırlık kaldırmayı çok severim. Yemek yemeye bayılırım";
            echo $Metin . "<br>";

            $Arananlar  =   array("çok", "bayılırım");
            $Degistirilecekler  =   array("fazla", "asla hayır demem");

            $Ifade  =   str_replace($Arananlar, $Degistirilecekler, $Metin);
            echo $Ifade;
            */


            $Metin  =   "Kamer çok duygusal bir çocuktur";
            echo $Metin . "</br>";
            $Degisecek  =   array("Gamber Alperen");
            $Ifade  =   substr_replace($Metin, $Degisecek, 0, 5);
            echo $Ifade;


            ?>
        </body>
    </head>
</html>