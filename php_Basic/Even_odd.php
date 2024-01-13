<html> 
 <body> 
 <form method="post"> 
 Enter a number:::
 <input type="number" name="num"> 
 <input type="submit" value="Submit"> 
 </form> 
 </body> 
 </html>

 <?php 
 
 if($_POST) 
 { 
 $number = $_POST['num'];
 
 if(($number % 2) == 0) 
 { 
 echo "$number is an Even number"; 
 }else 
 { 
 echo "$number is Odd number"; 
 } 
 } 
 ?>