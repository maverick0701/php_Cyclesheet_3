<!DOCTYPE html>
<head></head>
<body>
   <?php 
   include('./conection/index.php');
   $query="UPDATE Employee SET SALARY= SALARY + (SALARY * 10 / 100) WHERE DEPARTMENT='SALES'";
   $result=mysqli_query($conn,$query);
   $query2="SELECT DEPARTMENT, SALARY, NAME FROM `Employee` WHERE DEPARTMENT='SALES'";
   $result2=mysqli_query($conn,$query2);
   echo "<br>Number of Affected Employee ".mysqli_affected_rows($conn). "<br>";
   echo "<table>";
   echo "<tr><th>DEPARTMENT</th><th>SALARY</th><th>Name</th></tr>";
    while($row=mysqli_fetch_assoc($result2))
    {
        echo "<tr>";
        echo "<td>".$row['DEPARTMENT']."</td>";
        echo "<td>".$row['SALARY']."</td>";
        echo "<td>".$row['NAME']."</td>";
        echo "</tr>";
    }
    echo "</Table>";
   ?>
</body>

</html>