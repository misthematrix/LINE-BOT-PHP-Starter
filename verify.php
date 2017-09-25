<?php
$access_token = 'yYMbtopJvX6o51crRIkC7w5my3/myrDJfZYWVOleP4Qyo3f3UmG/ASWMVJD2jwnRNiTgENo25eQJISQDSZgftv3Ldno9QM6UxisMFgocUItEWkZcFhol1oKnAicZPxmCMjeUzhM8QnRru02OEcJL1gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;