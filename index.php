<?php
require './classes/Database.php';
require './classes/User.php';

// realizam conectia cu baza de date
$conn = new Database();
$db = $conn->getConnection();

// preluam userul din baza de date
$user = User::gerUser($db);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2> Bine ai venit : <?= $user['username'] ?> </h2>
</body>
</html>