<html>
    <body>
        <form method="post" action="slip_7.php">
           Enter 1st no:
           <input type="text" name="t1"><br>
           Enter 2nd no:
           <input type="text" name="t2"><br>
           1-mod <br>2-power <br>3-sum of first n <br>4-factorial of no <br>
           Enter Choice:
           <input type="text" name="t3">
           
           <input type="submit">
        </form>
    </body>
</html>

<?php
$n1=$_POST["t1"];
$n2=$_POST["t2"];
$ch=$_POST["t3"];

function mod($n1,$n2)
{
    echo("Mod of two number:".($n1%$n2));
}

function power($n1,$n2)
{
  $p=1;
  for($i=1;$i<=$n2;$i++)
    $p=$p*$n1;
 echo("Power=".$p);
}

function sum($n1)
{
    $s=0;
    for($i=1;$i<=$n1;$i++)
      $s=$s+$i;
    
      echo("sum of First N number=".$s);
}

function fact($n2)
{
    $f=1;
    for($i=1;$i<=$n2;$i++)
      $f=$f*$i;
    echo("Factorial of No:".$f);
}
switch($ch)
{
   case 1:mod($n1,$n2);
      break;
   case 2:power($n1,$n2);
      break;
   case 3:sum($n1);
    break;
   case 4:fact($n2);
   break;
}
?>