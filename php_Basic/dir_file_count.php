<html>
    <body>
        <form action="dir_file_count.php" method="post">
          Enter Directory name:
           <input type="text" name="t1">
           <input type="submit">
        </form>
    </body>
</html>

<?php
   $d=$_POST["t1"];
   chdir($d);
   $dh=opendir("$d");
   if($dh==false)
     die("Directory not found");
    
    $cnt1=0;$cnt2=0;
   while(($fname=readdir($dh))!=false)
  {
        if(is_dir($fname))
        {
          $cnt1++;
        }
        
        if(is_file($fname))
        {
          $cnt2++;
        }
  }
 echo"Directory count=$cnt1";
 echo"<br>File count=$cnt2";
?>