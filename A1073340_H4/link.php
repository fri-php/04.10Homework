
<?php

$link=mysqli_connect('localhost','root','password','php2020');
$SQL="SELECT * FROM employee ";
$result=mysqli_query($link, $SQL);	

echo "<table border='1'>";
	echo "<tr>";
    echo "<td><b>No</b></td>";
    echo "<td><b>Fname</b></td>";
    echo "<td><b>Minit</b></td>";
    echo "<td><b>Lname</b></td>";
    echo "<td><b>Bdate</b></td>";
    echo "<td><b>Address</b></td>";
    echo "<td><b>Sex</b></td>";
    echo "<td><b>Salary</b></td>";
    echo "</tr>";

while($row=mysqli_fetch_assoc($result))
{

	echo "<tr>";
	echo "<td>".$row["No"]."</td>";
	echo "<td>".$row["Fname"]."</td>";
	echo "<td>".$row["Minit"]."</td>";
	echo "<td>".$row["Lname"]."</td>";
	echo "<td>".$row["Bdate"]."</td>";
	echo "<td>".$row["Address"]."</td>";
	echo "<td>".$row["Sex"]."</td>";
	echo "<td>".$row["Salary"]."</td>";
	echo "</tr>";
}

"</table>";
?>





