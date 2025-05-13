<?php 

define ('API_BASE', 'http://localhost/API/API-PHP/API/index.php?option=');


API_BASE . 'status';


echo "aplicação";
$resultado = api_request('status');
print_r($resultado);

function api_request($option){
    $client = curl_init(API_BASE . $option);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    return json_decode($response, true);




}

?>