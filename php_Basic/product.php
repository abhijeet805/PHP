<html>
   <body>
    <form method="post" action="product.php">
       Enter Poduct no:
       <input type="text" name="t1"><br>
       Enter Name:
       <input type="text" name="t2" ><br>
       Enter price:
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
    $price=$_POST["t3"];
    
    mysql_query("use abhi");
     $k=mysql_query("insert into product values($no,'$name',$price)");
     if($k==true)
       echo("Insert succesfully....");
     else
       echo("dosen't insert in the table");

       mysql_close($con);
?>