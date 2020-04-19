<?php

$con=mysqli_connect('localhost','root','donny021201','php2020');

$SQL="SELECT * FROM employee";

$result=mysqli_query($con, $SQL);
echo "<table border='1'>";
echo "<tr><th>Number</th><th>First Name</th><th>Minit</th><th>Last Name</th><th>Birthday Date</th><th>Sex</th><th>Salary</th></tr>";
while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";
 	echo "<td>".$row["No"]."</td><td>".$row["Fname"]."</td><td>".$row["Minit"]."</td><td>".$row["Lname"]."</td><td>".$row["Bdate"]."</td><td>".$row["Sex"]."</td><td>".$row["Salary"]."</td>";
 	echo "</tr>";
 }
 echo"</table>";
?>