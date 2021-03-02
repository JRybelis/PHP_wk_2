<?php

$color = '#020000';
$checkboxAmount = rand(3, 10);
$letters = range('A', 'J');

if($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $color = 'white';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox counter</title>
</head>
<body style="background-color:<?= $color?>;">

<?php if($_SERVER['REQUEST_METHOD'] !== 'POST') { ?>
    
    <form action="http://localhost/antras/webMechanicsHW9-10.php" method="POST">
        <?php foreach($letters as $key => $letter) {
            if($key+1 > $checkboxAmount) {
                break;
            }?>
            <span style="color: white"> 
            <?= $letter ?>
            </span>
            <input type="checkbox" name="letters[]" value="<?= $letter ?>">
            <input type="hidden" name="count" value="<?= $checkboxAmount ?>">
        <?php } ?>
        <button type="submit" name="checkboxGenerator">Count selected checkboxes</button>
    </form>
    
<?php }else { ?>
    <h1><?= count($_POST['letters']) ?> of <?= $_POST['count'] ?></h1>
    <?php _d($_POST); 
} ?>

</body>
</html>