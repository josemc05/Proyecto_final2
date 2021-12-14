<?php

    include("confi.php");

    try 
    {
        $conn = new PDO("mysql:host=".HOST_NAME.";dbname=".DATABASE, USER_NAME, PASS);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } 
    catch(PDOException $e) 
    {
        echo "Problema de conexión : " . $e->getMessage();
    }

?>
