<?php
include 'manage.php';

$name = $_POST['Name'];

/*Sending Query to Dev*/
$email = $_POST['Email'];
$msg = $_POST['Message'];
$to = "fruitioncore@gmail.com";
$subject = "Query by User";
$header = "From: $email";

mail($to,$subject,$msg,$header);

/*Sending a Response back to the User*/
$Reply_Msg="We will get back to you shortly.";
$Reply_Sub="Thank you for contacting us";
$Reply_Head="From: $to";

mail($email,$Reply_Sub,$Reply_Msg,$Reply_Head);

/*Connecting to Database*/
$ip = "localhost";
$user = "id1802919_freefolk";
$pass = "freak";
$dbname = "id1802919_nsec";

$connect=coDB($user,$pass,$dbname);

/*END*/
$insert = "INSERT INTO Contact SET Name = '$name', Email = '$email', Message = '$msg'";

$connect->query($insert);

header('location:index.html')
?>
