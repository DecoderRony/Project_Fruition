<?php
    if(isset($_POST['signin']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $id = $_POST['id'];
        $email=$_POST['email'];
        $pass = $_POST['pass1'];
        $repass = $_POST['pass2'];
        $department = $_POST['dept'];
        $year = $_POST['year'];
        
        require '../connection.php';

        $sql = "SELECT * FROM signin WHERE College_ID =?";

        $stmt=$pdo->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
        $row=$stmt->fetch(PDO::FETCH_NUM);

        if($row>=1)
            {
                echo("<script LANGUAGE = 'Javascript'>
                window.alert('User Already Exists');
                window.location.href = '../../../index.html';
                </script>");
            }
        
        else if($pass==$repass)
        {
            $insert_db = "INSERT INTO signin SET First_Name=?, Last_Name=?, College_ID=?, Email=?, Password=?, Department=?, Year=?";
            $query=$pdo->prepare($insert_db);
            $query->bindValue(1,$fname);
            $query->bindValue(2,$lname);
            $query->bindValue(3,$id);
            $query->bindValue(4,$email);
            $query->bindValue(5,$pass);
            $query->bindValue(6,$department);
            $query->bindValue(7,$year);
            $query->execute();
            echo("<script LANGUAGE = 'Javascript'>
            window.alert('Sign Up Successfull');
            window.location.href = '../../index.html';
            </script>");
            
        }
        else
        {
            echo("<script LANGUAGE = 'Javascript'>
            window.alert('Password Missmatch');
            window.location.href = '../../index.html';
            </script>");
        
        }
    }
?>