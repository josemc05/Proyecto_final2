<?php
try {
    $mbd = new PDO('mysql:host=localhost:3307;dbname=sistema_transporte', 'admin', '123456');
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>