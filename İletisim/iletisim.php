<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
echo "<h1 class='display-4' id='yaziilk' >HOŞGELDİNİZ<h1>";
echo "<h1 class='display-4'>KAYIT İŞLEMİNİZ BAŞARIYLA GERÇEKLEŞMİŞTİR</h1>";
echo "<h1 class='display-4'>ANA SAYFAYA YÖNLENDİRİLİYORSUNUZ</h1>";
header("Refresh: 2; url=index.html");
}
else
{
    echo "HATA";
}
?>
