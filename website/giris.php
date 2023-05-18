<?php

    if(isset($_POST['email'],$_POST['sifre'])&&($_POST['email']=='B221210033@sakarya.edu.tr')
     &&($_POST['sifre']=='B221210033'))
    {
        echo("HOŞGELDİN B221210033 :)");
        echo"<p> <a href='anasayfa.html'>&lt;GERİ DÖN&gt;</a></p>";
    }
    else
    {   
        echo("HATALI GİRİŞ YAPTINIZ!!");
        echo"<p> <a href='giriş.html'>&lt;GERİ DÖN&gt;</a></p>";
    }
   
?>