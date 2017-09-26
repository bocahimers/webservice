<?php
$url = "http://stmikelrahma.ac.id";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo "<pre>";print_r($result);
?>