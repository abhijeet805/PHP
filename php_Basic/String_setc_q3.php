<html>
    <body>
        <form method="post" action="String_setc_q3.php">
        Enter email:
        <input type="text" name="t1"><br>
        <input type="submit" value="ok">
    </form>
        

    </body>
</html>

<?php
  $s1=$_POST["t1"];
  $p="^[a-zA-Z_0-9]+@[a-z]+\.[a-z]{2,3}$";

  if(ereg($p,$s1))
    echo"<br>Valid";
  else
    echo"<br>Invlid";
  
?>