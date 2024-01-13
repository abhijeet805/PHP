<?php
  #Soundex compare (compare pronouncition)
  $s1='see';
   $s2='sea';
  
   if(soundex($s1)==soundex($s2))
     print"Same";
    else
     print "<br>Not same";

    #Metaphone compare (compare pronouncition)
     $s3='know';
     $s4='no';

     if(metaphone($s3)==metaphone($s4))
      print("<br>Same");
    else
      print("<br>Not Same")

?>