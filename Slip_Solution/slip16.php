<html>
   <body>
     <form action="slip16.php" method="post">
        Enter RNO: <br>
        <input type="post" name="t1"> <br>
        Enter subject:
        <input type="text" name="t2"> <br>
         
        Enter 5 subject Mark:
        <input type="text" name="t3">
        <input type="submit">
     </form>
   </body>
</html> 

<?php
  $rno=$_POST["t1"];
  $sub=$_POST["t2"];
  $marks=$_POST["t3"];
  
  $rno=explode(" ",$rno);
  $sub=explode(" ",$sub);
  $marks=explode(" ",$marks);

  echo("<table border=1>");
echo("<th>rno
       <th>subject
       <th>marks");
  for($i=0;$i<5;$i++){
     echo("<tr>");
     echo("<td>".$rno[$i]);
     echo("<td>".$sub[$i]);
     echo("<td>".$marks[$i]);
     echo("</tr>");
  }
?>