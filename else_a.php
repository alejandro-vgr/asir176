<?php
function nota($a){
	if($a>5){
	$r='Apto';
}
	else{
	$r='No Apto';
}
	return $r;
}
echo '5.5'.'='.nota(5.5).'<br>';
echo '2.9'.'='.nota(2.9);
?>