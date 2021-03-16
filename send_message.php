<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://rest.nexmo.com/sms/json");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "from=Vonage+APIs&text=poruka&to=38762094861&api_key=9e2919dc&api_secret=bqKsdEz6BjU3Wmmp");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);

curl_close($ch);

print_r($server_output);
?>