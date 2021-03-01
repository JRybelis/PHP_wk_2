<?php

_d($_GET);
$color = 'fff';

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $color = '#005B4D';
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = '#E6D262';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get & Post</title>
</head>
<body style="background-color: <?= $color ?>;">

    <h1>Please press either button  to change the colour of the page.</h1>
    
    
    <form action="" method="get">
    <button type="submit">GET</button>
    </form>
    <form action="" method="post">
    <button type="submit">POST</button>
    </form>
    

</body>
</html>