<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .red{
        height: 100vh;
        width: 100vw;
    }
    </style>
</head>
<?php 


function setColor($color)
{
    switch($color)
    {
        case "white":
        echo '<body style="background-color:white">';
        break;
        case "red":
            echo '<body style="background-color:red">this is red';
    }
}

setColor($_POST['name']);
echo "</body>"
?>

</html>