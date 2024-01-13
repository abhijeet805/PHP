<html>
   <body>
    <form method="post" action="insert.php">
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
   $con=mysql_connect("localhost","root","");
   if($con==false)
       die("Error occure in DB connection");

    $no=$_POST["t1"];
    $name=$_POST["t2"];
    $per=$_POST["t3"];
    
    mysql_query("use abhi");
    $k=mysql_query("insert into student values($no,'$name',$per)");
     if($k==true)
       echo("Insert succesfully....");
     else
       echo("dosen't insert in the table");

       mysql_close($con);
?>