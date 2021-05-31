

<!DOCTYPE html>
<head>
<?php
    
       
    ?>
</head>
<body>
    <?php
    
    if (isset($_COOKIE['userCookie'])) {
        unset($_COOKIE['userCookie']);
        $value=$_POST['name'];
        setcookie("userCookie", $_POST['name'], time()+3600*24,'/');
    }
    else
    {
        setcookie("userCookie", $_POST['name'], time()+3600*24,'/');
    }
    echo "Welcome To Website".$_COOKIE['userCookie'];   
    ?>
</body>
