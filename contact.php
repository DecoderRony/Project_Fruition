<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$msg = $_POST['Message'];
$freak = "freak";


/*Connecting to Database*/
$ip = "localhost";
$user = "root";
$pass = "";
$dbname = "NSEC";
/*END*/

$connect = mysqli_connect($ip,$user,$pass,$dbname);

$insert = "INSERT INTO Contact SET Name = '$name', Email = '$email', Message = '$msg'";

$connect->query($insert);

header('location:index.html')
?>
