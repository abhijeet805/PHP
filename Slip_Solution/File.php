<?php
  $f1=fopen("student.dat","r");
  if($f1==false)
    die("File not Found");
    
  $rno=fgets($f1);
  $nm=fgets($f1);
  $os=fgets($f1);
  $wt=fgets($f1);
  $ds=fgets($f1);
  $py=fgets($f1);
  $ja=fgets($f1);
  $cn=fgets($f1);
$t=($os+$wt+$ds+$py+$ja+$cn);
$p=$t/6;
  echo("<table border=1>");
  echo("<tr> <td>Rno <td> $rno </tr>");
  echo("<tr><td>Name <td> $nm </tr>");
  echo("<tr><td>os <td> $os </tr>");
  echo("<tr><td>wt <td> $wt </tr>");
  echo("<tr><td>DS <td> $ds </tr>");
  echo("<tr><td>PY <td> $py </tr>");
  echo("<tr><td>JA <td> $ja </tr>");
  echo("<tr><td>CN <td> $cn </tr>");
  echo("<tr><td>Total <td> $t </tr>");
  echo("<tr><td>Percentage <td> $p </tr>");
?>