<?php

if (isset($_GET['color']) && $_GET['color'] == 1) {
    $color = '#BC1B19';
} else {
    $color = '#020000';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background color changing webpage 1.0</title>
</head>
<body style="background: <?= $color ?>;">

<h1 style="color: white">Pick a colour</h1>
<a href="http://localhost/antras/WebMechanicsHW1.php">Black 2.0</a>
<a href="http://localhost/antras/WebMechanicsHW1.php?color=1">Guards Red</a>
    
</body>
</html>

