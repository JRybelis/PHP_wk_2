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
    <title>Background color changing webpage 1.3</title>
</head>
<body style="background: <?= $color ?>;">

    <h1 style="color: white">Please enter an rbg color code of your choice to the input field.</h1>
    <form method="get">
        <input type="text" name="color">
        <button type="submit">Generate chosen color</button> 
    </form>

<a href="http://localhost/antras/WebMechanicsHW3.php">Revert to Black 2.0</a>

    
</body>
</html>

