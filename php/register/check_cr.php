<?php
    require '../connection.php';

    $sql = "SELECT * FROM signin INNER JOIN cr as c WHERE ? = c.ID";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1,$_SESSION['id']);
    $stmt->execute();

    $result=$stmt->fetch(PDO::FETCH_NUM);

    if($result>=1)
    {
        header('Location: ../../cr_post.html');
    }
    else
    {
        header('Location: ../posting/display_post.php');
    }

    

?>