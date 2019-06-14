<?php
    if(isset($_POST['POST']))
    {
        require '../connection.php';
        session_start();
        $name=$_SESSION['name'];
        $department=$_SESSION['dept'];
        $year=$_SESSION['year'];
        $title=$_POST['title'];
        $post = $_POST['post'];

        $sql = "INSERT INTO posts SET Name=?, Title=?, Post=?, Department=?, Year=?";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1,$name);
        $stmt->bindValue(2,$title);
        $stmt->bindValue(3,$post);
        $stmt->bindValue(4,$department);
        $stmt->bindValue(5,$year);
        $stmt->execute();

        header('Location: ../posting/display_post.php');
    }
?>