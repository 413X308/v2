<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $Url = "https://egre55.com//resources/us.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
?>


