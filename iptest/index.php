<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$ip = filter_var($ip, FILTER_VALIDATE_IP);
echo "MY IP ADDRESS IS: " . $ip . '<br />';
$s = file_get_contents('https://freegeoip.net/json/' . $ip);
print_r($s, false);