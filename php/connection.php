<?php
    $host="localhost";
    $user="root";
    $dbpass="";
    $dbname="test";

    /*Creating DSN*/
    $dsn = 'mysql:host='. $host .';dbname='. $dbname;

    /*Creating a PDO instance*/
    try{
        $pdo = new PDO($dsn,$user,$dbpass);
    }catch(PDOException $e){
        throw new DBException($e->getMessage(),$e->getCode());
    }
?>