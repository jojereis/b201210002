<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
echo "<h1 class='display-4' id='yaziilk' >HOŞGELDİNİZ<h1>";
echo "<h1 class='display-4'>KAYIT İŞLEMİNİZ BAŞARIYLA GERÇEKLEŞMİŞTİR</h1>";
$adsoyad=$_POST["adsoyad"];
$telefon=$_POST["telefon"];
$mail=$_POST["mail"];
$sifre=$_POST["ilksifre"];
$dogumyeri=$_POST["dogumyeri"];
$dogumtarihi=$_POST["dogumtarihi"];
$cinsiyet=$_POST["cinsiyet"];
if(isset($_POST["hobi"]))
{
$hobiler=$_POST["hobi"];
}
$okul=$_POST["egitim"];
$okuladi=$_POST["okuladi"];
$adres=$_POST["adres"];
$eklenenler=$_POST["eklenenler"];
echo"<h1 class='display-6'>KAYITLI BİLGİLERİNİZ</h1>";
echo"AD SOYAD: ".$adsoyad."<br>";
echo"TELEFON: ".$telefon."<br>";
echo"MAİL: ".$mail."<br>";
echo"ŞİFRE:".$sifre."<br>";
echo"DOĞUM YERİ:".$dogumyeri."<br>";
echo"DOĞUM TARİHİ:".$dogumtarihi."<br>";
echo"CİNSİYET:".$cinsiyet."<br>";
echo "HOBİLER : <br>";
foreach($hobiler as $hobi) {
    echo  $hobi . '<br/>';
}
echo"OKUL:".$okul."<br>";
echo"OKUL ADI:".$okuladi."<br>";
echo"ADRES:".$adres."<br>";
echo"EKLENENLER:".$eklenenler."<br>";


echo "<h1 class='display-4'>ANA SAYFAYA YÖNLENDİRİLİYORSUNUZ. LÜTFEN BEKLEYİN.</h1><br><br><br>";
header("Refresh: 10; url=../index2.html");

}
else
{
    echo "HATA";
    header("Refresh: 2; url=iletisim.html");
}
?>
<style type="text/css" >
h1{text-align:center;}
#yaziilk{margin-top:5%;}
</style>
