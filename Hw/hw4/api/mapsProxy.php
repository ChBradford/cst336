<?php



$apikey = getenv('API_KEY');

$lat = $_GET['lat'];
$long = $_GET['long'];

$curl = curl_init();
      curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.darksky.net/forecast/$apikey/$long,$lat",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
      "cache-control: no-cache"
      ),
   ));

$jsonData = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

echo $jsonData;


?>