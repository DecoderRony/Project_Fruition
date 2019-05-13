
<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$msg = $_POST['Message'];
$mail_usr = $email;
$to_team = "fruitioncore@gmail.com";
$subject_team = "Query/Suggestion by User";
$header_team = "From: $email";
$subject_usr = "Thanks for Contacting Us";
$header_usr = "From: $to_team";
$message_to_usr = "We will review your query/suggestion and get back to you soon.";

/*Connecting to Database*/
$ip = "localhost";
$user = "id9494424_nsecinfo";
$pass = "ronydas117";
$dbname = "id9494424_nsec";
/*END*/

$connect = mysqli_connect($ip,$user,$pass,$dbname);

if(mysqli_connect_errno()){
    die("Connection error"."\r\n".mysqli_connect_error());
}

$insert = "INSERT INTO Contact SET Name = '$name', Email = '$email', Message = '$msg'";

$connect->query($insert);

mail($to_team,$subject_team,$msg,$header_team);
mail($mail_usr,$subject_usr,$message_to_usr,$header_usr);


header('location:index.html')
?>

