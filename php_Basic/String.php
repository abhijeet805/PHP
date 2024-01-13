<?PHP
  $s1="My name is Abhijeet";

  printf("Total length of String=".strlen($s1));
  echo("<br> Toatl world count=".str_word_count($s1));
  
  echo("<br>Reverse String=".strrev($s1));
  echo("<br>Position of word=".strpos($s1,"Abhijeet"));

  echo("<br>Repace String=".str_replace("Abhijeet","Abhi<br>",$s1));
  echo($s1);

  echo("<br>".str_repeat($s1,10));

  echo rtrim("<br>   This is a good boy   ");
  echo ltrim("     This is a good boy   ");
?>