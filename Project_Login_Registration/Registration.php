<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        .container{
            height:100vh;
            width:100vw;
            background:url("pixel.jpg");
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .res{
            height:350px;
            width:250px;
            color:white;
            background:url("pixel.jpg"); 
            background-color:white;
            border-radius:10px;
            padding-left:50px;
        }
    </style>
</head>
<body>
     <div class="container">
        <div class="res">
            <br><br><br>
        <form action="Registration.php" method="post">
        Name:<br>
        <input type="text" name="t1" placeholder="Name"><br><br>
        mobaile No:
        <input type="text" name="t2" placeholder="Mobaile No"><br><br>
        Username:<br>
        <input type="text" name="t3" placeholder="Username"><br><br>
        password:<br>
        <input type="password" name="t4" placeholder="Password"><br><br>
        <input type="submit" name="sub">
        
        </form>
        </div>
        
     </div>
</body>
</html>

<?php
   $n=$_POST["t1"];
   $m=$_POST["t2"];
   $u=$_POST["t3"];
   $p=$_POST["t4"];
  
   $con=mysql_connect("LAPTOP-NUMF87S6","root","");
   if($con==false)
     die("Error occure in connection");

     mysql_select_db("abhi");
     $k=mysql_query("insert into login_data values('$n',$m,'$u','$p')");
    if($k>0)
    {
        echo'Register succesfully';
        header("location:login.php");
    }
   else{
    echo"Not register";
   }
?>