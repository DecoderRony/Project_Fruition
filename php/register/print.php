<?php
    session_start();
    
    echo("College_ID : ".$_SESSION['id'].".<br>");
    echo("Name : ".$_SESSION['name'].".<br>");
    echo("Department : ".$_SESSION['dept'].".");
?> 