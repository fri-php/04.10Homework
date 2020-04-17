<?php


$link=mysqli_connect('localhost','root','password','php2020');

$SQL="SELECT * FROM employee";

$result=mysqli_query($link,$SQL);

echo "<table border='1'>";
echo "<tr>
<th>Number</th><th>Fname</th><th>Minit</th><th>Lname</th><th>Address</th><th>Bdate</th><th>Sex</th><th>Salary</th>
</tr>";

while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>".$row["No"]."</td><td>".$row["Fname"]."</td><td>".$row["Minit"]."</td><td>".$row["Lname"]."</td><td>".$row["Address"]."</td><td>".$row["Bdate"]."</td><td>".$row["Sex"]."</td><td>".$row["Salary"]."</td>";
	echo "</tr>";
}

echo "</table>";

?>