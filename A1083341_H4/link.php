<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>A1083341 + H4</title>
</head>
<body>

<center>
	<font face="Ink Free">
		<table>
			<tr bgcolor="＃ff6347">
				<th width="20px" height="35px">No</th>
				<th width="50px" height="35px">Fname</th>
				<th width="20px" height="35px">Minit</th>
				<th width="80px" height="35px">Lname</th>
				<th width="100px" height="35px">Bdate</th>
				<th width="100px" height="35px">Address</th>
				<th width="20px" height="35px">Sex</th>
				<th width="100px" height="35px">Salary</th>
			</tr>


<?php

$con=mysqli_connect('localhost','root','ben82837088','php2020');
$SQL="SELECT * FROM employee";
$result=mysqli_query($con,$SQL);

while ($row=mysqli_fetch_assoc($result)) 
{
	echo "<tr>";
	echo   "<th>".$row["No"]."</th>
			<th>".$row["Fname"]."</th>
			<th>".$row["Minit"]."</th>
			<th>".$row["Lname"]."</th>
			<th>".$row["Bdate"]."</th>
			<th>".$row["Address"]."</th>
			<th>".$row["Sex"]."</th>
			<th>".$row["Salary"]."</th>";
	echo "</tr>";
}

?>

		</table>
	</font>
</center>

	

</body>
</html>