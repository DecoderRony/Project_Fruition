<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
            body{
                font-family: 'Montserrat', sans-serif;
            }
</style>
</head>
<body class=" w3-light-grey">
    <div class="w3-center w3-padding-large">
            <h2>NOTICE BOARD</h2>
    </div>
<div class="container-fluid table-responsive">
<table class="w3-table w3-hide-small  table-bordered">
    <tr style="font-size:30px;">
    <th>Name</th>
    <th>Title</th>
    <th>Message</th>
    </tr>
<?php
    require '../connection.php';
    session_start();

    $sql = "SELECT * FROM posts WHERE Department=? AND Year =?";
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(1,$_SESSION['dept']);
    $stmt->bindValue(2,$_SESSION['year']);
    $stmt->execute();

    $posts=$stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($posts as $post)
    {
       
        echo("<tr style=font-size:20px;><td>".$post['Name']."</td><td>".$post['Title']."</td><td>".$post['Post']."</td></tr>");
       
        
    }
?>


<!--FOR SMALL SCREENS-->
<table class="w3-table w3-hide-medium w3-hide-large table-bordered">
    <tr>
    <th class="w3-center">Name</th>
    <th class="w3-center" style="padding-left:30px;">Title</th>
    <th class="w3-center">Message</th>
    </tr>
<?php
    

    foreach($posts as $post)
    {
       
        echo("<tr><td>".$post['Name']."</td><td style=padding-left:30px;>".$post['Title']."</td><td>".$post['Post']."</td></tr>");
       
        
    }
?>
</table>
</div>
</body>
</html>
