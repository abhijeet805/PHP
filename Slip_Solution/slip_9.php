<html>
    <body>
        <form action="slip_9.php" method="post">
            Enter String:
            <input type="text" name="t1"><br>
            1-select first 5 word <br>
            2-Lowercase and TitleCase <br>
            3- Left pad * <br>
            4-Remove space <br>
            5-reverse <br>
            Enter Choice:
            <input type="text" name="t2">
            <input type="submit">

        </form>
    </body>
</html>

<?php
 $s1=$_POST["t1"];
 $ch=$_POST["t2"];

 switch($ch)
 {
   case 1:  $s2=implode(' ',array_slice(explode(' ',$s1),0,5));
            echo("First 5 word=".$s2); 
            break;

    case 2:$s2=strtolower($s1);
           $s3=ucwords($s1);
           echo("Lower case:".$s2);
           echo("<br> String Title:".$s3);
           break;

    case 3:$s2=str_pad($s1,20,"*",STR_PAD_LEFT);
       echo("Padding string:".$s2);
       break;

    case 4:
 echo("Remove white spaces using trim() function:".trim($s1));   
         break;

    case 5:echo("Reverse String:".strrev($s1));
      break;
 }
?>