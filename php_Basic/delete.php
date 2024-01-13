<html>
<body>
     <form action="delete.php" method="post">
        Enter Rno for deleted:
            <input type="text" name="t1"><br>
            <input type="submit" values="deleted record">

     </form>
</body>
</html>

<?php
   $c=mysql_connect("LAPTOP-NUMF87S6","root","");
   if($c==false)
      die("Error occure when connect to DB");
    
     mysql_select_db("abhi");   
     $r=$_POST["t1"];
     mysql_query("delete from student where rni=$r");
     $k=mysql_affected_rows();
     if($k>=1)
      echo("delete succesfully...");
     else
       echo("record not deleted");
?>