<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $mail=mb_strtolower($_POST["mail"]);
    $sifre=mb_strtolower($_POST["sifre"]);
    if($mail=="b201210002@sakarya.edu.tr" && $sifre=="b201210002")
    {
        echo "<h1 class='display-2'> Hoşgeldin B201210002 </h1>";
        header("Refresh: 2; url=../index2.html");
    }
    else
    {
        echo"<script>alert('Mail Adresi yada Parola Hatalı!!! Giriş Ekranına Yönlendiriliyorsunuz, Lütfen Bekleyin ')</script>";
        header("Refresh: 2; url=login.html");
    }
}

?>
<style type="text/css">
    h1{text-align: center;
        margin-top:5%;
    }

</style>