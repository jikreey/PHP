<?php
  $myFile = "test.txt";
  $fh = fopen($myFile, 'a');
  fwrite($fh, "Some text");
  fclose($fh);
  
  //This will write Some text at the end of pointer in test.txt
?>
