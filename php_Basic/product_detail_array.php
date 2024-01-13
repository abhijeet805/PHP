<html>
<body>
     <form action="" method="post">
        Enter pname:
        <input type="text" name="t1" id=""><br>
        <input type="submit" value="search">
     </form>    
<body>
</html>

<?php
   $c=mysql_connect("localhost","root","");
   if($c==false)
      die("Error occure to coonect DB");
   mysql_select_db("abhi");
   $name=$_POST["t1"];
   
   $res=mysql_query("select * from product where pname='$name'");
   if($row=mysql_fetch_array($res))
   {
     echo("Price of '$row[1]'=".$row[2]);
   }
   else
   {
    echo("Product not found");
   }

   ?>