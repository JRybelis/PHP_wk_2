<?php
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {

    $x = (float) ($_POST['x'] ?? 0); // default value for x = 0, if it was not set or was removed by user. Type cast to float type.  
    $y = (float) ($_POST['y'] ?? 0);

    echo sha1('A single cookie');
    $sum = $x + $y;
    setcookie('Result', $sum);

    header('Location: http://localhost/antras/webMechanics.php');
    die;
}

if (isset($_COOKIE['Result'])) {
    $result = $_COOKIE['Result'];
    setcookie('Result', '', time() - 5);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of two values calculator, using a cookie</title>
</head>
<body>
    <h1>Sum of two values</h1>
    <h3>Result: <?= $result ?? '' ?></h3> 
    <form action="http://localhost/antras/webMechanics.php" method="post">
    <input type="text" name="x">
    <input type="text" name="y">
    <button type="submit">Sum</button>
    </form>
</body>
</html>