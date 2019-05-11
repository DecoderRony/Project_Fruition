<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$msg = $_POST['Message'];
$to = "fruitioncore@gmail.com";
$subject = "Query by User";
$header = "From: $email";
/*Connecting to Database*/
$ip = "localhost";
$user = "root";
$pass = "";
$dbname = "NSEC";
/*END*/

$connect = mysqli_connect($ip,$user,$pass,$dbname);

$insert = "INSERT INTO Contact SET Name = '$name', Email = '$email', Message = '$msg'";

$connect->query($insert);

mail($to,$subject,$msg,$header);

header('location:index.html')
?>
