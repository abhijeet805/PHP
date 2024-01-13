<html>
    <body>
        <form action="dir_file_seperatlly.php" method="post">
          Enter Directory name:
           <input type="text" name="t1">
           <input type="submit">
        </form>
    </body>
</html>

<?php
   $d=$_POST["t1"];
   $dh=opendir("$d");
   if($dh==false)
     die("Directory not found");
    Echo"java file="; 
   while(($fname=readdir($dh))!=false)
  {
        if(strstr($fname,".java"))
        {
          echo"<br>$fname";
        }
        
  }

  $dh=opendir("$d");
   if($dh==false)
     die("Directory not found");
   
  echo"<br>class File=";
  while(($fname=readdir($dh))!=false)
  {
        if(strstr($fname,".class"))
        {
          echo"<br>$fname";
        }
  }
  closedir($dh);
?>