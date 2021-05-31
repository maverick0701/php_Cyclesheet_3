<?php 
$serverName="localhost";
$username='root';
$password='';
$dataBase='madhav';

//create connection
$conn=mysqli_connect($serverName,$username,$password,$dataBase);

if(!$conn)
{
    die('connection was un-successfull'.mysqli_connect_error());
}
echo "connection was successfull";

?>