<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>login</title>

    <style>
         .container{
            height:100vh;
            width:100vw;
           background:url("b.jpg"); 
           display:flex;
           justify-content:center;
           align-items:center; 
        }

         .login{
            height:320px;
            width:220px;
            color:white;
            background:url("re.jpeg"); 
            background-color:white;
            border-radius:10px;
        }
        .info{
            padding:30px
        }
        #s{
            margin-left:35px;
            background:rgb(12, 12, 97);
            color:white;
        }
        #s1{
            background:rgb(12, 12, 97);
            color:white;
        }
    </style>
</head>
<body>
     <div class="container">
        
        <div class="login">
            <div class="info">
            <form action="login.php" method="post">
             <br><br><br>
              username:
                <input type="text" name="t1" placeholder="Username">
             <br><br><br>
             password:
             <input type="password" name="t2" placeholder="password">
              <br><br>
            <input type="submit" value="Login" name="s1" id="s1">
            <input type="submit" value="SignUp" name="s1" id="s">
            </form>
            
            </div>
            
        </div>
     </div>
</body>
</html>

         <?php
               $ch=$_POST["s1"];

              if($ch=="Login")
              {
    
                $con=mysql_connect("LAPTOP-NUMF87S6","root","");
                if($con==false)
                  die("Error occure in connection");
 
                   $user=$_POST["t1"];
                   $pass=$_POST["t2"];

                   mysql_select_db("use abhi");   
                   $res=mysql_query("select * from login_data where username='$user' and password='$pass'");
                 if($row=mysql_fetch_array($res))
                  {
                     header("location:welcome.php");
                  }  
                else{
                    echo"Invalid username and password";
                }
              }
            
            if($ch=="SignUp"){
                header("location:Registration.php");
              }
            ?>