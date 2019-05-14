
<?php
include 'manage.php';

$name = $_POST['Name'];

/*Sending Query to Dev*/
$email = $_POST['Email'];
$msg = $_POST['Message'];
<<<<<<< HEAD:php/contact.php
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
=======
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
>>>>>>> 48b0e23250cdf808fd46d82ae4c7f98323555380:contact.php

$connect=coDB($user,$pass,$dbname);

/*END*/
$insert = "INSERT INTO Contact SET Name = '$name', Email = '$email', Message = '$msg'";

$connect->query($insert);

<<<<<<< HEAD:php/contact.php
=======
mail($to_team,$subject_team,$msg,$header_team);
mail($mail_usr,$subject_usr,$message_to_usr,$header_usr);


>>>>>>> 48b0e23250cdf808fd46d82ae4c7f98323555380:contact.php
header('location:index.html')
?>

