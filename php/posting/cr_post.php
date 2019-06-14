<?php
    require '../connection.php';
    session_start();
    $name=$_SESSION['name'];
    $department=$_SESSION['dept'];
    $year=$_SESSION['year'];
    $post = $_POST['post'];

    $sql = "INSERT INTO posts SET Name=?, Post=?, Department=?, Year=?";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1,$name);
    $stmt->bindValue(2,$post);
    $stmt->bindValue(3,$department);
    $stmt->bindValue(4,$year);
    $stmt->execute();
?>