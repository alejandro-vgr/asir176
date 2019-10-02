<?php
function calcula($a,$b){
$r=null;
 $r=$r."suma:" .$a."+".$b."=".($a+$b). '</br>';
 $r=$r."resta:" .$a."-".$b."=".($a-$b). '</br>';
 $r=$r."division:" .$a."/".$b."=".($a/$b). '</br>';
 $r=$r."multiplicacion:" .$a."x".$b."=".($a*$b). '</br>';
return $r;
}
$r=calcula(40,8);
echo $r;
$r=calcula(420,30);
echo $r;
?>