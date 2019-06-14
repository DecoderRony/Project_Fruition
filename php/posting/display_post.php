<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body class=" w3-light-grey">
<table class="w3-table">
    <tr>
    <th class="w3-center">Name</th>
    <th class="w3-center" style="padding-left:300px;">Title</th>
    <th class="w3-center">Message</th>
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
       
        echo("<tr><td class=w3-center>".$post['Name']."</td><td class=w3-center style=padding-left:300px;>".$post['Title']."</td><td class=w3-center>".$post['Post']."</td></tr>");
       
        
    }
?>
</table>
</body>
</html>
