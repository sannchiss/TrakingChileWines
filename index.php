<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://gtstnt.tntchile.cl/gtstnt/seam/resource/restv1/auth/detalleExpedicioneService/detalles",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\n    \"DETALLES_EXPEDICION\": {\n        \"DETALLE_EXPEDICION\": [\n            {\n                \"CLIENTE\": \"900085046\",\n                \"CENTRO\": \"01\",\n                \"EXPE_NUMERO\": \"910485346\"\n            }\n        ]\n    }\n}",
  CURLOPT_HTTPHEADER => array(
    "Cache-Control: no-cache",
    "Authorization: Basic U1BFUkVaOkhvbWUuMjAyMA==",
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>