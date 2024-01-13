<html>
   <body>
    <form method="post" action="word_count.php">
      Enter file Source to word count:
      <input type="text" name="t1">
      <input type="submit">
    </form>
   </body>
</html>

<?php
  $f1=$_POST["t1"];
  $fh1=fopen($f1,"r");

  if($fh1==false)
    die("File not found");
$cnt=0;
  while(!feof($fh1))
  {
    $s1=fgets($fh1);
     $a=explode(" ",$s1);
     $cnt=$cnt+count($a);
  }
  ECHO"Word count=$cnt";
  fclose($fh1);
?>
