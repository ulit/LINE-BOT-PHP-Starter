<?php
/**
 * Created by PhpStorm.
 * User: ulit
 * Date: 4/19/2017 AD
 * Time: 11:25 AM
 */

$access_token = '6fujvRNLq+1TCd4/6fmtTJQ8aO4RJbPF8dYLCTHfOneYUZaTcd4QKPsylw/4kdmoBc57szFJVWnj5sYTjBFP/VglaBNvyRruJo4IMR9NIg8nNimdJ8dpHl/zFXwb7RPT6ruefDDDrSxnbEjOCjnUygdB04t89/1O/w1cDnyilFU
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
