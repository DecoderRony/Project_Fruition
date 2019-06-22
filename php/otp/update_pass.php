<?php
    require '../connection.php';
    
    session_start();
    
    $new_pass=$_POST['new_pass'];
    $confirm_pass=$_POST['confirm_pass'];
    
    $email=$_SESSION['email'];
    
    var_dump($_SESSION);
    
    if($new_pass==$confirm_pass)
    {
        $sql="UPDATE signin SET Password=? WHERE Email =?";
        $stmt=$pdo->prepare($sql);
        $stmt->bindValue(1,$new_pass);
        $stmt->bindValue(2,$email);
        $stmt->execute();
        
        header('Location: ../../index.html');
    }
    else
    {
        echo("NO");
    }

?>