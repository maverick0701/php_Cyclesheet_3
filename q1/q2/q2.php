<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
<?php 
date_default_timezone_set('Asia/Kolkata');
function returnCurrentTime() {
     
    return [
        'hr' => date("h"),
        'sa' => date("a"),
    ];
    
}

function returnMatchingMessage($day,$hr)
{
    if($day=="am")
    {
        return "Good Morning";
    }
    else
    {
        if($hr<'06')
        {
            return "Good Afernoon";
        }
        else
        {
            return "Good Evening";
        }
    }
}
function returnMessage()
{
    
    $time= returnCurrentTime();
    $hr=$time['hr'];
    $day=$time['sa'];
    $message=returnMatchingMessage($day,$hr);
    echo $message." ".$_POST["name"];
}
returnMessage();
?>
</body>
</html>