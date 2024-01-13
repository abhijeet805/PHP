<html>
    <body>
        <form action="dir_disp_table.php" method="post">
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

    echo"<table border=1><th> Files name in that $d Directory</th>";
  while(($fname=readdir($dh))!=false)
  {
     echo"<tr><td>$fname </td></tr>";
  }
  echo"</table>";
?>