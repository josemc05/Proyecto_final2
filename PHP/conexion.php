<?php
try {
    $mbd = new PDO('mysql:host=localhost:3307;dbname=sistema_transporte', 'admin', 'admin');
echo "gogo power rangers";
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>