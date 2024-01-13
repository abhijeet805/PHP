<html>
  <body>
     <form action="slip8.php" method="post">
       Enter 1st String: 
       <input type="text" name="t1"> <br>
       Enter 2nd String: 
       <input type="text" name="t2"> <br>

       If Your Case is 3 then Enter N character to check: 
       <input type="text" name="t4"> <br>
       Enter Choice: 
       <input type="text" name="t3"> <br>
       <input type="submit">

     </form>
  </body>
</html>

<?php
   $s1=$_POST["t1"];
   $s2=$_POST["t2"];
   $ch=$_POST["t3"];
   
   switch($ch){
    case 1:
        $k=strstr($s1,$s2);
        
        if($k==NULL)
        {
            echo("String Not Found:");
        }
        else{
            echo("String Found:".$k);
        }
        break;
    case 2:
        $p=strpos($s1,$s2);
        if($p==NULL)
          echo("String Are not found");
        else{
          echo("String Found in the large String=".$p);    
        }
       break;
    case 3:
        $n=$_POST["t4"];
        $k=strncasecmp($s1,$s2,$n);
        
        if($k==0)
        {
            echo("String Are same");
        }
        else 
        Echo("String Are Not Same");
          break;
   }
?>