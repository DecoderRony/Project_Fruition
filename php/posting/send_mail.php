<?php
    $sql = "SELECT Email FROM signin WHERE Department=? AND Year=?";
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(1,$_SESSION['dept']);
    $stmt->bindValue(2,$_SESSION['year']);
    $stmt->execute();

    $rows=$stmt->fetch(PDO::FETCH_ASSOC);

    foreach($rows as $row)
    {
        $to=$row['Email'];
        $subject="New Post From CR";
        $msg=$post;
        $header="From: fruitioncore@gmail.com";
        mail($to,$subject,$msg,$header);
    }
?>