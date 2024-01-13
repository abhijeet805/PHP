<html>
<body>
     <form action="update.php" method="post">
       Enter Rollno:
       <input type="text" name="t1"><br>
       Enter Name:
       <input type="text" name="t2" ><br>
       Enter per:
       <input type="text" name="t3"><br> 
       <input type="submit" value="submit"> 
    
    </form>
</body>
</html>

<?php
   $c=mysql_connect("LAPTOP-NUMF87S6","root","");
   if($c==false)
      die("Error occure when connect to DB");
    
     mysql_select_db("abhi");   
     $r=$_POST["t1"];
     $n=$_POST["t2"];
     $p=$_POST["t3"];
     $val=mysql_query("update student set name='$n',per=$p where rni=$r");
     if($val==true)
      echo("update record succesfully...");
     else
       echo("record not update");
?>