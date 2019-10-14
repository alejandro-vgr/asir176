<?php
function nota($a){
	$r='Pendiente';
	if($a>=5){
	$r='Aprobado';
}
	if($a>=7){
	$r='Notable';
}
	if($a>=8.5){
	$r='Sobresaliete';
}
	return $r;
}
echo '3'.'='.nota(3).'<br>';
echo '7'.'='.nota(7).'<br>';
echo '9'.'='.nota(9).'<br>';
echo '10'.'='.nota(10).'<br>';
?>