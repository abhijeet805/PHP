<html>
    <body>
        <form method="post" action="String_question.php">
           Enter String:
           <input type="text" name="t1"><br>
           Select seprator:
           <select name="op1">
              <option value="#">#</option>
              <option value="@">@</option>
              <option value="|">|</option>
              <option value="'">,</option>
           </select>
          <br> 1.split String into words using seprator<br>
           2.replace seprator<br>
           3.find the last word in given String:
          <input type="text" name="t2">
         <br> Enter choice:
          <input type="text" name="t3"><br>
          <input type="submit" value="submit">
        </form>
    </body>
</html>
<?php
  $s1=$_POST["t1"];
  $sep=$_POST["op1"];
  $ch=$_POST["t3"];

   switch($ch)
   {
     case 1:$a=split(",",$s1); 
        //$a=split(",",$s1);
             print_r($a);
             break;
     case 2:$s2=str_replace(",",$sep,$s1);
          echo"replace string=".$s2;
          break;
     case 3:$s2=$_POST["t2"];
            $k=strstr($s1,$s2);
            if($k==NULL)
             echo"Not found";
            else
            echo "Found=$k";
            break;
   }
?>