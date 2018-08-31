<?php 
//$apiUrl = 'http://api.cne.cl/v3/combustibles/calefaccion/estaciones?token=PT33JekNhp&distribuidor=Copec';
$apiUrl = 'http://aguitech.com/phpero/json_respuesta.php';
$curl = curl_init($apiUrl);
curl_setopt($curl, CURLOPT_ENCODING ,"");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($curl);
print($json);
curl_close($curl)
?>