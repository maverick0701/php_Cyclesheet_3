<?php 
require('../conection/index.php');
$dept=$_POST['dept'];
echo "<Br>";
$query="SELECT * FROM `Employee` WHERE `DEPARTMENT` = '$dept'";

$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
echo "<table>";
echo "<tr><th>NAME</th><th>DEPARTMENT</th><th>DOB</th><th>SALARY</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$row['NAME']."</td>";
    echo "<td>".$row['DEPARTMENT']."</td>";
    echo "<td>".$row['DOB']."</td>";
    echo "<td>".$row['SALARY']."</td>";
    echo "</tr>";
}
echo "</Table>";

?>