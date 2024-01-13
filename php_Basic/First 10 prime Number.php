<?php
   $count=1;
   $num=2;
   while($count<=10)
   {
     
      for($i=2;$i<$num;$i++)
       {
         if($num%$i==0)
           {
            break;
           }
       }
       if($num==$i)
        {
            echo("  $num");
            $count=$count+1;
        }
      $num++;
   }
?>