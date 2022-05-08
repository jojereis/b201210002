  
function bosmu()
{
    var nameler=["adsoyad","telefon","mail","ilksifre","ikisifre","sehirler","dogumtarihi","okuladi","adres"];
    var idler= ["adsoyad","telefon","mail","sifre1","sifre2","sehir","dogumtarihi","okuladi","adres"];  
    
    for(var i=0; i<nameler.length; i++)
    {
        document.getElementById(idler[i]).innerHTML=""; 
    }
    
    for(var i=0; i<nameler.length; i++)
    {
       if(document.forms["myform"][nameler[i]].value=="")
       {
        document.getElementById(idler[i]).innerHTML="BOŞ BIRAKILAMAZ!!!";
       }
      
    }  
    for(var i=0; i<nameler.length; i++)
    {
       
       if(document.forms["myform"][nameler[i]].value=="")
        {
          return false;
        } 
       
    }
    var mailkontrol=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    var telkontrol=/^( ?0? ?5[0-9]{2} ?[0-9]{3} ?[0-9]{2} ?[0-9]{2} ?)/;
    var mail=document.forms["myform"][nameler[2]].value;
    var tel=document.forms["myform"][nameler[1]].value;
    var bosluksuz=tel.replace(/\s+/g, '');
    if(!(bosluksuz.length>9&&bosluksuz.length<12))
    { 
      document.getElementById("telefon").innerHTML="TELEFON NUMARASI 9-11 KARAKTER OLABİLİR!!!";
      return false;
    }
    if(!mail.match(mailkontrol))
    { 
      document.getElementById("mail").innerHTML="LÜTFEN DOĞRU E-MAİL FORMATINDA GİRİNİZ!!!";
      return false;
    }
    if(!tel.match(telkontrol))
    {
      document.getElementById("telefon").innerHTML="LÜTFEN DOĞRU FORMATTA TELEFON NUMARASI GİRİNİZ!!!";
      return false;
    }
    if(!(document.forms["myform"][nameler[4]].value==document.forms["myform"][nameler[3]].value) && !(document.forms["myform"][nameler[4]].value==""))
    {
     document.getElementById("sifre2").innerHTML="GİRİLEN ŞİFRELER AYNI DEĞİL!!!";
     return false;
    }
    else
    {
          return true;
    }    
    
}
function temizle()
 {
   var nameler=["adsoyad","telefon","mail","ilksifre","ikisifre","dogumtarihi","okuladi","adres","eklenenler","hobi1","hobi2","hobi3","hobi4",];
   var idler= ["adsoyad","telefon","mail","sifre1","sifre2","sehir","dogumtarihi","okuladi","adres"];  
   for(var i=0; i<nameler.length; i++)
   {
       document.forms["myform"][nameler[i]].value="";   
   }
   for(var i=0; i<idler.length; i++)
   {
       document.getElementById(idler[i]).innerHTML=""; 
         
   }
   document.forms["myform"]["cinsiyet"].value="erkek";
   document.forms["myform"]["egitim"].value="ortaokul";
   document.forms["myform"]["sehirler"].value="ankara";
   
 }