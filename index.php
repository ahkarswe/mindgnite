
<?php 
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body style="background-color:#1e1e1e;">
<?php
date_default_timezone_set('asia/yangon');
$time=date('h:m:sa');
    echo'<h1 class="text-light">'.$time.'</h1>';
    ?>
</body>
</html>