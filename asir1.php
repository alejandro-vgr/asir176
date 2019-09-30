<a>alejandro</a>
</br>

<P> Enlace al compañero de la derecha</p>
<a href="http://192.168.0.82/asir1_saioa/asir1.html">saioa</a>

<p> Enlace al compañero de la izquierda</p>
<a href="http://192.168.0.74/asir1_victor/asir1.html">victor</a>

<?php
$f=fopen ('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,date(' Y-m-d H:i'));
fwrite($f,"\r\n"); 
fclose($f);
?>