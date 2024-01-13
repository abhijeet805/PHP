<?php
echo("<table border=1>");
   for($i=0;$i<=8;$i++)
   {
    echo("<tr>");
    for($j=0;$j<=8;$j++){
       if(($i+$j)%2==0 )
         echo("<td style='background-color:black'>&nbsp;&nbsp;&nbsp;&nbsp;");
        else{
            echo("<td>&nbsp;&nbsp;&nbsp;&nbsp;");
        }
        }
   }
?>