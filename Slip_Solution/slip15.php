<html>
   <body>
     <form action="slip15.php" method="post">
        Enter String: <br>
        <input type="post" name="t1"> <br>
        Enter Choice:
        <input type="text" name="t2">
        <input type="submit">
     </form>
   </body>
</html>

<?php
    $s1=$_POST["t1"];
    
    $ch=$_POST["t2"];

    switch($ch){
        case 1:
            $a=substr($s1,0,5);
            echo("$a");
            break;
        case 2:
            echo(strtolower($s1));
            echo(ucword($s1));
             break;
        
         case 3:
            echo(str_pad($s1,20,"*",STR_PAD_BOTH));
            break;
        case 4:
             ECHO(strrev($s1));

            break;
    }
?>