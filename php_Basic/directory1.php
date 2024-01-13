<html>
    <body>
        <form method="post" action="directory1.php">
        Enter Directory:
        <input type="text" name="t1">
        <input type="submit">
       </form>
    </body>
</html>

<?php
  $d=$_POST["t1"];
  $dh=opendir("$d");
  if($dh==false)
  {
    die("Directory not found");
  }
  while(($fname=readdir($dh))!=false)
  {
    echo"<br>$fname";
  }
  closedir($dh);
?>