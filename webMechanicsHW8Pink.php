<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Location: http://localhost/antras/WebMechanicsHW8rose.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink</title>
</head>
<body style="background-color: #DEB0B3;">
    <form action="http://localhost/antras/WebMechanicsHW8Rose.php" method="post">
    <button type="submit">Navigate to the rose coloured page.</button>
    </form>
    
</body>
</html>