<?php
/*require './php/manage.php';*/

$name = $_POST['Name'];
$email = $_POST['Email'];
$msg = $_POST['Message'];
$date = date("Y/m/d");

/*Connecting to DB*/
$user = "root";
$pass = "";
$dbname = "test";

$connect = mysqli_connect("localhost",$user,$pass,$dbname);

/*Sending Query/Suggestion Data to DB*/
$insert = "INSERT INTO table1 SET Name = '$name', Email = '$email',Message = '$msg', Date = '$date'";

$connect->query($insert);


/*Sending Query to Team*/
$to_team = "fruitioncore@gmail.com";
$subject_team = "Query/Suggestion by User";
$header_team = "From: $email";

mail($to_team,$subject_team,$msg,$header_team);

/*Replying to Query*/
$subject_usr = "Thanks for Contacting Us";
$header_usr = "From: $to_team";
$message_to_usr = "We will review your query/suggestion and get back to you soon.";

mail($email,$subject_usr,$message_to_usr,$header_usr);


header('Location: ../../Project_Fruition/index.html');
?>

