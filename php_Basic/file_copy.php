<html>
   <body>
    <form method="post" action="file_copy.php">
      Enter file Source:
      <input type="text" name="t1">
      Enter file Destination:
      <input type="text" name="t2">
      <input type="submit">
    </form>
   </body>
</html>

<?php
  $f1=$_POST["t1"];
  $f2=$_POST["t2"];

  $fh1=fopen($f1,"r");
  $fh2=fopen($f2,"w");

  if($fh1==false)
    die("Source File does not found");

  while(!feof($fh1))
  {
     $s1=fgets($fh1);
     fputs($fh2,$s1);
  }
  fclose($fh1);
  fclose($fh2);
  Echo"Copy succesfully";
?>