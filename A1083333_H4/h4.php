<!DOCTYPE html>
<html>
<body>

<table border="1" align="center">
<tr><th>No</th><th>Fname</th><th>Minit</th><th>Lname</th><th>Bdate</th><th>Adress</th><th>Sex</th><th>Salary</th></tr>

</body>
</html>
<?php

$link = @mysqli_connect('localhost','root','password','php2020');

$sql = "SELECT * FROM employee";
$result = mysqli_query($link, $sql) ;
while( $row = mysqli_fetch_assoc($result) )
{ 
   echo "<tr>"."<td>".$row["No"]."</td>"."<td>".$row["Fname"]."</td>"."<td>".$row["Minit"]."</td>"."<td>".$row["Lname"]."</td>"."<td>".$row["Bdate"]."</td>"."<td>".$row["Adress"]."</td>"."<td>".$row["Sex"]."</td>"."<td>".$row["Salary"]."</td>"."</tr>";
}


?>