<html>
    <body>
        <form method="post" action="dir_file_exist.php">
        Enter Directory name:
        <input type="text" name="t1">
        Enter file name to search:
        <input type="text" name="t2">
        <input type="submit">
        </form>
    </body>
</html>

<?php
  $d=$_POST["t1"];
  $f=$_POST["t2"];

  $dh=opendir("$d");
   if($dh==false)
   {
    die("Directory not found");
   }
   $f1=0;
  while(($fname=readdir($dh))!=false)
  {
    if($fname==$f)
    {
       $f1=1;
       echo("$f File Found ");
       break;
    }
  }
  if($f1==0)
   echo"File Not Found";
  closedir($dh);
?>