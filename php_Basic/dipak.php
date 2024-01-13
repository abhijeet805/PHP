<html> 
<body>
<form method="post"action="dipak.php">
entere string
<input type= "text" name= "t" ><br>
<input type="radio"name="r"value="1">
length of string<br>
<input type="radio"name="r"value="2">
count vowels<br>
<input type="radio"name="r"value="3">
left and right padding<br>
<input type="radio"name="r"value="4">
lower and tittle case<br>
<input type="radio"name="r"value="5">
remove space<br> 
<input type="radio"name="r"value="6">
reverse string<br>
<input type="submit">
</form>
</body>
</html>
<?php
$s=$_POST["t"];
$ch=$_POST["r"];
switch($ch)
{
case 1:length($s);
   break;
case 2: vowels_count($s);
    break;
case 3: left_right_pad($s);
    break;
case 4: dis_lower_title($s);
   break;
case 5:$s=trim($s);
 echo("string=".$s);
 echo("<br>after remove space lenth=".strlen($s));
    break;

case 6:echo("string reverse=".strrve($s));
     break;
}


function length($s)
{
$cnt=0;
for($i=0;@$s[$i]!=NULL;$i++)
{
$cnt++;
}
echo("length=".$cnt);
}
function vowels_count($s)
{
$cnt=0;
for($i=0;$i<strlen($s);$i++)
{
if($s[$i]=="a" || $s[$i]=="A"||$s[$i]=="e"||$s[$i]=="E"||$s[$i]=="i"||$s[$i]=="I"||$s[$i]=="o"||$s[$i]=="O"||$s[$i]=="u"||$s[$i]=="U")
 $cnt++;
}
echo("vowels==".$cnt);
}			
function left_right_pad($s)
{
 $k=str_pad($s,40,"Hi",STR_PAD_LEFT);
 echo($k);
}
function  dis_lower_title($s)
{
    $s1=strtolower($s);
    echo("string lower=".$s1);
    $s2=ucfirst($s);
    echo("<br> title case=".$s2);
}
?>