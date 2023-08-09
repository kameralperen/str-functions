<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
<?php

echo "bilgisayarın sunucunun işletim sistemi :" . getenv("OS");
echo "<pre>";
print_r(getenv());
echo "</pre>";

putenv("ISIM=Alperen");
echo "<pre>";
echo "Bilgisayarda sonradan tanımlanan isim adlı ortam değişkeninin adı: " . getenv("ISIM");
echo "</pre>";



?>
</body>
</html>