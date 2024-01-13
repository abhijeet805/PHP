<html>
    <body>
        <form method="post" action="dir_exe.php">
          Enter Directory:
          <input type="text" name="t1">
          Enter Extension:
          <input type="text" name="t2">
          <input type="submit">
        </form>
    </body>
</html>

<?php
   $d=$_POST["t1"];
   $exe=$_POST["t2"];
   $dh=opendir("$d");
   if($dh==false)
    die("Directory not found");

while(($fname=readdir($dh))!=false)
{
    if(strstr($fname,$exe))
    {
        echo"<br> $fname";
    }
}
 closedir($dh);
?>