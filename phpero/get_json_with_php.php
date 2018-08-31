<?php 

$apiUrl = 'http://api.cne.cl/v3/combustibles/calefaccion/estaciones?token=PT33JekNhp&distribuidor=Copec';
$curl = curl_init($apiUrl);
curl_setopt($curl, CURLOPT_ENCODING ,"");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($curl);
//echo $json;

//echo $json["estado"];


//echo "hola mundo";

$resultado = json_decode($json);

print_r($resultado);

echo $resultado->estado;
//json_decode($json, true);

//echo $json["estado"];

curl_close($curl)


?>