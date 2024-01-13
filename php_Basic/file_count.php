<html>
  <body>
    <form action="file_count.php" method="post">
      Enter file name:
      <input type="text" name="t1">
      <input type="submit">
    </form>
  </body>
</html>

 <?php
  $f=$_POST["t1"];
  $fh=fopen($f,"r");
   if($fh==false)
     die("File not found");

  $c1=0;$c2=0;$c3=0;
   while(!feof($fh))
   {
     $ch=fgetc($fh);
     if(($ch>='a' && $ch<='z') ||($ch>='A' && $ch<='Z'))
       $c1++;
    else if($ch>='0'&& $ch<='9')
      $c2++;
    else
      $c3++;
    
   }
   echo"Charater count=$c1";
   echo"<br>digit count=$c2";
   echo"<br>Symbol count=$c3";
  fclose($fh);
 ?>