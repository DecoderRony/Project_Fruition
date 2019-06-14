<?php
    require '../connection.php';
    session_start();

    $sql = "SELECT * FROM posts WHERE Department=? AND Year =?";
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(1,$_SESSION['dept']);
    $stmt->bindValue(2,$_SESSION['year']);
    $stmt->execute();

    $posts=$stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($posts as $post)
    {
        echo($post['Name']);
        echo($post['Post']);
    }
?>