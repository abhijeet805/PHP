<html>
    <body>
        <form action="slip10.php" method="post">
       Enter the Number: <br>
       <input type="post" name="t1"> <br>
       Enter the  2nd Number: <br>
       <input type="post" name="t3"> <br>

       Enter Choice: <br>
      <input type="text" name="t2">
       <input type="submit">
        </form>
    </body>
</html>

<?php
   $a=$_POST["t1"];
   $b=$_POST["t3"];
   $ch=$_POST["t2"];

   switch($ch){
    case 1:
        function power($a,$b){
            $p=1;
            for($i=0;$i<$b;$i++){
                $p=$p*$a;
            } 
            echo("Power of the Numbers=".$p); 
        }
          power($a,$b);
         break;
    case 2:
        function sum($a){
            $sum=0;
            for($i=0;$i<=$a;$i++){
              $sum=$sum+$i;
            }
            echo("Sum of Number=".$sum);
        }
        sum($a);
        break;
    case 3:
        function fact($b)
        {
            $fact=1;
            for($i=1;$i<=$b;$i++)
            {
               $fact=$fact*$i;
            }
            echo("Factorial Number=".$fact);
        } 
        fact($b);
        break;
   }
?>