<html>
    <body>
        <form action="slip19.php" method="post">
            Enter Large String To search:
            <input type="text" name="t1"><br>
            Enter small String:
            <input type="text" name="t2">

            Enter position=
            <input type="text" name="t3">
            <br>
            Enter n character=
            <input type="text" name="t5"><br>
            
            Enter Choice:
            <input type="text" name="t4"><br>

            <input type="submit">
        </form>
    </body>
</html>
<?php
   $s1=$_POST["t1"];
   $s2=$_POST["t2"];
   $ch=$_POST["t4"];

   switch($ch){
    case 1:
        $p=$_POST["t3"];
        $n=$_POST["t5"];
        $k=substr($s1,$p,$n);
        echo("Deleted Character=".$k);
        break;
    case 2:
        $p=$_POST["t3"];
        $k=substr_replace($s1,$s2,$p,0);
        echo($k);
        break;
    case 3:
        $p=$_POST["t3"];
        $k=substr_replace($s1,$s2,$p);
        echo($k);
   }
?>