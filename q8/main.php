<?php
require('./conection/index.php');
echo "<br>";
$name=$_POST['name'];
$dob=$_POST['dob'];
$dept=$_POST['dept'];
$sal=$_POST['sal'];


$query="INSERT INTO `Employee` (`ID`, `NAME`, `DOB`, `DEPARTMENT`, `SALARY`) VALUES (NULL, '$name', '$dob', '$dept', '$sal')";

$result=mysqli_query($conn,$query);

if($result)
{
    echo 'inserted data sucessfully';
}
else
{
    die(mysqli_error($conn));
}

?>