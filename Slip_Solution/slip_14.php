<html>
    <body>
        <form method="post" action="slip_14.php">
           Enter choice:
           <input type="text" name="t1">
           <input type="submit">
        </form>
    </body>
</html>

<?php
    function check_num($n){
        if($n%2==0)
          return true;
    }
  
     $ch=$_POST["t1"];
     $a=array(10,21,31,41,50,60);
     switch($ch)
     {
        case 1:
            $b=array_chunk($a,4);
            print_r($b);
            break;
        case 2:$c=array("a"=>"50","b"=>"20","c"=>"30");
            asort($c);
            print_r($c);
            break;
        case 3:
            $b=array_filter($a,"check_num");
            print_r($b);
            break;
     }
?>