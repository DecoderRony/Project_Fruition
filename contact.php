<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$msg = $_POST['Message'];
$to = "fruitioncore@gmail.com";
$subject = "Query by User";
$header = "From: $email";
/*Connecting to Database*/
$ip = "localhost";
$user = "id1802919_freefolk";
$pass = "freak";
$dbname = "id1802919_nsec";
/*END*/

$connect = mysqli_connect($ip,$user,$pass,$dbname);

if(mysqli_connect_errno()){
    die("Connection error"."\r\n".mysqli_connect_error());
}

$insert = "INSERT INTO Contact SET Name = '$name', Email = '$email', Message = '$msg'";

$connect->query($insert);

mail($to,$subject,$msg,$header);

header('location:index.html')
?>
