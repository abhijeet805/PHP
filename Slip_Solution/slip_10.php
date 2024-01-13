<html>
    <body>
        <form action="slip_16.php" method="post">
            Enter serial Number:
            <input type="text" name="t1"><br>
            Enter Subject Name:
            <input type="text" name="t2"><br>
            Enter Marks 
            <input type="text" name="t3"><br>
           <input type="submit">
        </form>
    </body>
</html>

<?php
  $s1=$_POST["t1"];
  $s2=$_POST["t2"];
  $s3=$_POST["t3"];

  $srno=explode(" ",$s1);
  $sname=explode(" ",$s2);
  $marks=explode(" ",$s3);

  echo("<table border=1>");
  echo("<tr><th>srno <th>subject <th> marks </tr>");
  for($i=0;$i<6;$i++)
  {
     echo("<tr><td>".$srno[$i]);
     echo("<td>".$sname[$i]);
     echo("<td>".$marks[$i]);
     echo("</tr>");
  }
  echo("</table>");
?>