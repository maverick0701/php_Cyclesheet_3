<!DOCTYPE html>
<head></head>
<body>
   <?php 
   include('./conection/index.php');
   $query="SELECT DEPARTMENT, COUNT(*) FROM Employee GROUP BY DEPARTMENT";
   $result=mysqli_query($conn,$query);
   echo "<table>";
   echo "<tr><th>DEPARTMENT</th><th>Count</th></tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$row['DEPARTMENT']."</td>";
        echo "<td>".$row['COUNT(*)']."</td>";
        echo "</tr>";
    }
    echo "</Table>";
   ?>
</body>

</html>