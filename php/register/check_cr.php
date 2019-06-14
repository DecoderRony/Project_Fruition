<?php
    require '../connection.php';

    $sql = "SELECT * FROM signin AS s INNER JOIN CR as c WHERE s.College_ID = c.ID";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $result=$stmt->fetch(PDO::FETCH_NUM);

    if($result>0)
    {
        echo($_SESSION['name']);
        die();
    }

    echo($_SESSION['name']);

?>