<?php
try{
$db = new PDO('mysql:host=localhost;dbname=portfoliophp', 'fdefever', 'qsdfghjklm') ;
} catch(Exception $e) {
    echo "Impossible de se connecter à la base de données";
    echo $e->getMessage();
    die();
}
