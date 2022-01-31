<?php
$curl = curl_init('https://api.openweathermap.org/data/2.5/weather?q=Arnouville&appid={apikey}&units=metric&lang=fr');
curl_setopt_array($curl,[
   CURLOPT_CAINFO => __DIR__ . DIRECTORY_SEPARATOR . 'cert.cer',
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_TIMEOUT => 1 
]);
$data = curl_exec($curl);
if($data === false){
    var_dump(curl_error($curl));
}else{
    $data = json_decode($data,true);
    echo '<pre>';
    echo $data['main']['temp'];
    echo '</pre>';
}
curl_close($curl);
?>