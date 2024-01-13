<?php
  //Asssociative array
   
  $a=array(25,66,11,77,22,10);
  sort($a);
  echo"Indexarray sort=<br>";
  print_r($a);

$a1=array('1'=>'100','7'=>'700','8'=>'800','4'=>'400','5'=>'500');
  asort($a1);
  echo"<br><br>Associtive array sort int asending order according to value=<br>";
  print_r($a1);

  $a1=array('1'=>'100','7'=>'700','8'=>'800','4'=>'400','5'=>'500');
  arsort($a1);
  echo"<br><br>Associtive array sort int desending order according to value=<br>";
  print_r($a1);
  
  $a1=array('1'=>'100','7'=>'700','8'=>'800','4'=>'400','5'=>'500');
  ksort($a1);
  echo"<br><br>Associtive array sort in asending order according to Key=<br>";
  print_r($a1);

  $a1=array('1'=>'100','7'=>'700','8'=>'800','4'=>'400','5'=>'500');
  krsort($a1);
  echo"<br><br>Associtive array sort int desending order according to key=<br>";
  print_r($a1);
?>