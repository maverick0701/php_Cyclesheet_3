<?php 
require('../conection/index.php');
$dept=$_POST['id'];
$query="delete from  `Employee` where ID=$dept";

$result=mysqli_query($conn,$query);
echo "<br>Number of Affected Employee ".mysqli_affected_rows($conn). "<br>";

if($result)
{
    echo 'Deleted Successfully ';
}


?>