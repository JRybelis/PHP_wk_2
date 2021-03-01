<?php

if (isset($_GET['link'])) {
    header ('Location: http://localhost/antras/WebMechanicsHW5red.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue</title>
</head>
<body style="background-color: #0E142E;">
<h1 style="color: white">This page swaps out for a different one.</h1>
<a href="?link=1">Press here to refresh</a>
    
</body>
</html>