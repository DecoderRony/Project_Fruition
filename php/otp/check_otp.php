<?php
    if(isset($_POST['check_otp_submit']))
    {
        require '../connection.php';
        $usr_otp = $_POST['usr_otp'];
        $md5usr_otp = md5($usr_otp);
        $sha1usr_otp = sha1($md5_otp);
        $cryptusr_otp = crypt($sha1usr_otp,'op');

        if($cryptusr_otp == $_SESSION['otp']);
        {
            echo("Yes");
        }
    }
?>