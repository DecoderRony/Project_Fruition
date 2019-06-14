<?php
    if(isset($_POST['login_submit']))
    {
        $college_id = $_POST['id'];
        $password = $_POST['pass'];

        $id="root";
        $pass="";
        $dbname="test";

        $connect = mysqli_connect("localhost",$id,$pass,$dbname);

        if (mysqli_connect_errno())
        {
            echo("failed to connect to database" . mysqli_connect_error());
        }


        $sql = "SELECT * FROM signin WHERE College_ID=$college_id OR Password ='$password'";

        $result = ($connect -> query($sql));

        if(!$result){
            echo("<script LANGUAGE = 'Javascript'>
            window.alert('There is something wrong on our end');
            window.location.href = 'https://www.nsec.tk';
            </script>");
        }

        $row = mysqli_num_rows($result);
        $check_row = mysqli_fetch_assoc($result);
        if($row>0 && $password==$check_row['Password'])
        {
            session_start();

            $_SESSION['name'] = $check_row['First_Name'];
            $_SESSION['id'] = $check_row['College_ID'];
            $_SESSION['dept'] = $check_row['Department'];
            $_SESSION['year'] = $check_row['Year'];

            echo("<script LANGUAGE = 'Javascript'>
            window.alert('Login Successfull');
            </script>");

            require 'check_cr.php';
        }
        else if($row>0 && ($college_id==$check_row['College_ID'] && $password!=$check_row['Password']))
        {
            echo("<script LANGUAGE = 'Javascript'>
            window.alert('Password Incorrect');
            window.location.href = 'https://www.nsec.tk';
            </script>");
        }
        else if($row==0)
        {
            echo("<script LANGUAGE = 'Javascript'>
            window.alert('Account Does Not Exist!');
            window.location.href = 'https://www.nsec.tk';
            </script>");
        }
    }
?>