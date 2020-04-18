<?php

$link=mysqli_connect('localhost','root','12345678','php2020');
$SQL="SELECT * FROM employee";
$result=mysqli_query($link,$SQL);
echo "<table border='1'align='center'>";
echo "<tr>".
		"<td>No</td>".
		"<td>Fname</td>".
		"<td>Minit</td>".
		"<td>Lname</td>".
		"<td>Bdate</td>".
		"<td>Address</td>".
		"<td>Sex</td>".
		"<td>Salary</td>".
	 "</tr>";

while($row=mysqli_fetch_assoc($result)){
	echo "<tr>".
		"<td>".$row["No"]."</td>".
		"<td>".$row["Fname"]."</td>".
		"<td>".$row["Minit"]."</td>".
		"<td>".$row["Lname"]."</td>".
		"<td>".$row["Bdate"]."</td>".
		"<td>".$row["Address"]."</td>".
		"<td>".$row["Sex"]."</td>".
		"<td>".$row["Salary"]."</td>".
	"</tr>";
}
?>