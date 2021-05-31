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
echo "Name: $_POST[name] <br>";
echo "Password: $_POST[password] <br>";
echo "Gender: $_POST[gender] <br>";
echo "Education:". implode(",",$_POST["education"])."<br>";
echo "Birthday: $_POST[birthday] <br>";
echo "email: $_POST[email] <br>";
?>