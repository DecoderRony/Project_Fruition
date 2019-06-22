<?php
    $host="localhost";
    $user="id9494424_nsecinfo";
    $dbpass="ronydas117";
    $dbname="id9494424_nsec";

    /*Creating DSN*/
    $dsn = 'mysql:host='. $host .';dbname='. $dbname;

    /*Creating a PDO instance*/
    try{
        $pdo = new PDO($dsn,$user,$dbpass);
    }catch(PDOException $e){
        throw new DBException($e->getMessage(),$e->getCode());
    }
?>