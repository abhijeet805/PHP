<?php
   $c=mysql_connect("localhost","root","");
   if($c==false)
      die("Error occure to coonect DB");
   mysql_select_db("abhi");
   echo("<table border=1>");
   $res=mysql_query("select * from product");
   
   echo"<th><tr> <td>pno <td>pname <td>price</tr></th>";
   while($row=mysql_fetch_array($res))
    {
        echo("<tr><td>$row[0] <td>$row[1] <td>$row[2]   </tr>");
    }
  echo("</table>");
  mysql_close($c)
?>