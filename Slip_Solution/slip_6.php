<html>
 <body>
    <form method="post" action="slip_6.php">
        Enter Large String:
        <input type="text" name="t1"><br>
        Enter small String 
        <input type="text" name="t2"> <br>

        Enter Choice: 
        <input type="text" name="t3"> <br>
        Enter n character to compare: 
        <input type="text" name="t4"> <br>

        <input type="submit">
    </form>
 </body>
</html>

<?php
  $s1=$_POST["t1"];
  $s2=$_POST["t2"];
  $ch=$_POST["t3"];
  $n=$_POST["t4"];
  
  switch($ch){
    case 1: $k=strstr($s1,$s2);
       if($k==null)
       {
        echo("SubString are not Found");
       }
       else{
        echo("SubString are Found");
       }
       break;
    case 2:
        echo("Position of String:".strpos($s1,$s2));
         break;
    
    case 3:
        $k=strncasecmp($s1,$s2,$n);
        if($k==0)
         echo("First n charracter are Same");
        else 
         echo("First n charracter are Same");
        break;
      }
?>