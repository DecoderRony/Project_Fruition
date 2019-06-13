<?php
    $name = $_POST['name'];
    $id = $_POST['id'];
    $pass = $_POST['pass1'];
    $repass = $_POST['pass2'];
    $department = $_POST['dept'];

    $user = "root";
    $passdb = "";
    $dbname = "test";

    $connect = mysqli_connect("localhost",$user,$passdb,$dbname);

    
    $sql = "SELECT * FROM signin WHERE College_ID = '$id'";

    $result = ($connect->query($sql));
    $row = mysqli_num_rows($result);

    if($row>=1)
        {
            echo("<script LANGUAGE = 'Javascript'>
            window.alert('User Already Exists');
            window.location.href = '../../Project_Fruition/index.html';
            </script>");
        }
    
    else if($pass==$repass)
    {
        $insert_db = "INSERT INTO signin SET Name = '$name', College_ID = '$id', Password = '$pass', Department = '$department'";
         $connect->query($insert_db);
            echo("<script LANGUAGE = 'Javascript'>
            window.alert('Sign Up Successfull');
            window.location.href = '../../Project_Fruition/index.html';
            </script>");
        
    }
    else
    {
        echo("<script LANGUAGE = 'Javascript'>
        window.alert('Password Missmatch');
        window.location.href = '../../Project_Fruition/index.html';
        </script>");
    
    }
   
?>