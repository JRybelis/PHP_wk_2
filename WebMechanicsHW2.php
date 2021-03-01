<?php

if (isset($_GET['color'])) {
    $color = '#'.$_GET['color'];
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
    <title>Background color changing webpage 1.2</title>
</head>
<body style="background: <?= $color ?>;">

<h1 style="color: white">Please add ?color='rbg color code of your choice' to the address bar.</h1>
<a href="http://localhost/antras/WebMechanicsHW2.php">Revert to Black 2.0</a>

    
</body>
</html>

