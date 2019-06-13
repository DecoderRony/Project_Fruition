<?php
    if(isset($_POST['forgot_submit']))
    {
        require '../connection.php';
        $email = $_POST['email'];

        /*Sending a query to check if user is lit*/
        $sql = "SELECT Email FROM signin WHERE Email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1,$email);
        $stmt->execute();

        /*Fetching the Value*/
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        /*Sending Out the OTP*/

        foreach($rows as $row)
        {
            if($row['Email']==$email)
            {
                $otp = rand(10000,99999);
                $date = date("Y/m/d");
                $otp_sub="OTP";
                $otp_head="From : fruitioncore@gmail.com";

                $sql="INSERT INTO OTP SET Email=?, Code=?, Date=?";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1,$email);
                $stmt->bindValue(2,$otp);
                $stmt->bindValue(3,$date);
                $stmt->execute();

                mail($email,$otp_sub,$otp,$otp_head);

                $md5otp=md5($otp);
                $sha1otp=sha1($md5otp);
                $cryptotp=crypt($sha1otp,'op');

                session_start();
                $_SESSION['otp']=$cryptotp;
                $_SESSION['email']=$email;
            }
        }
    }
?>