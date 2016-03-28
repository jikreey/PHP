<?php
  $myfile = fopen("file.txt","w");
  
  $txt = "John";
  fwrite($myfile,$txt);
  $txt = "Cena";
  fwrite($myfile,$txt);
  
  fclose($myfile);
  //it will create file.txt which contains John Cena
?>
