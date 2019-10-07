<?php
function calcular($a,$b){
	$r=null;
	$r=$r."suma:".$a."+".$b."=".($a+$b). '</br>';
	$r=$r."Resta:" .$a."-".$b."=".($a-$b). '</br>';
	if($b!=0) $r=$r."división:".$b."/".$a."=".($b/$a). '</br>';
	$r=$r."multiplicacion:" .$a."x".$b."=".($a*$b).'</br>';
	return $r;
}
$r=calcular(20,5);
echo $r;
$r=calcular(760,0)	;
echo $r;
?>