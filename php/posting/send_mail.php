<?php
    require '../connection.php';

    $sql = "SELECT Email FROM signin WHERE Department=? AND Year=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1,$_SESSION['dept']);
    $stmt->bindValue(2,$_SESSION['year']);
    $stmt->execute();

    $rows=$stmt->fetch(PDO::FETCH_ASSOC);

    foreach($rows as $row)
    {
        mail();
    }
?>