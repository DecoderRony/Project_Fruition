<?php 
    function coDB($user,$pass,$dbname){
	global $connect;
	//connecting to a database
	$connect = mysqli_connect("localhost",$user,$pass,$dbname);

	//if connection fails, kill script
	if(mysqli_connect_errno()){
	    die("Connection to database refused"."\r\n".mysqli_connect_error());
	}
	}
?>
