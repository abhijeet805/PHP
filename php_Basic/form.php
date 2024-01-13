<html>
    <body>
        <form method="post" action="form.php">
         Enter No1:
         <input type="number" name="t1">
        Enter no2:
         <input type="number" name="t2">
         
        <br><input type="radio" name="r1" value="aa">Addition<br>
        <input type="radio" name="r1" value="bb">Subtraction<br>
        <input type="radio" name="r1" value="cc">Multiplication<br>
        <input type="radio" name="r1" value="dd">Division<br>
        <input type="submit">
        </form>
    </body>
</html>

<?php
   $a=$_POST["t1"];
   $b=$_POST["t2"];
   $ch=$_POST["r1"];

   if($ch=="aa")
    {
        $c=$a+$b;
        echo"Addition=$c";
    }

    if($ch=="bb")
    {   
        $c=$a-$b;
        echo"Sub=$c";
    }
    if($ch=="cc")
     {  
        $c=$a*$b;
         echo"Multiplication=$c";
     }
     if($ch=="dd")
      {
          $c=$a/$b;
          echo"Addition=$c";
      }
?>