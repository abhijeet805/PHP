<html>
    <body>
     <form action="slip9.php" method="post">
          Enter String: <br>
          <input type="text" name="t1"> <br>
          Select Seperator:
          <select name="op">
            <option value="#">#</option>
            <option value="|">|</option>
            <option value=",">,</option>
          </select><br>

          Enter Choice:  <br>
          <input type="text" name="t2">
          <input type="submit" value="Sub....">
          <br>Enter Last Word To Search:
           <input type="text" name="t3">          
    </form>
    </body>
</html>

<?php
  $ch=$_POST["t2"];
  $s1=$_POST["t1"];
  $sep=$_POST["op"];

  switch ($ch) {
    case 1:
         $a=split($sep,$s1);
         print_r($a);
        break;
    
        case 2:
            $str=str_replace(",",$sep,$s1);
            echo("Replace String=".$str);
            break;
        case 3:
            $s3=$_POST["t3"];

            $k=strstr($s1,$s3);
            if($k==NULL)
             echo("String Not Found");
            else{
                echo"String Found=".$k;
            }
            break;
    default:
        # code...
        break;
  }
?>