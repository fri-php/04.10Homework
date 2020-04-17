<?php
$link=mysqli_connect('localhost','root','password','php2020');
$SQL="SELECT * FROM employee";
$result=mysqli_query($link,$SQL);

echo "<table border='1'align='center'>";
echo "<tr>".
	"<td><b>No</td>".
	"<td><b>Fname</td>".
	"<td><b>Minit</td>".
	"<td><b>Lname</td>".
	"<td><b>Bdate</td>".
	"<td><b>Address</td>".
	"<td><b>Sex</td>".
	"<td><b>Salary</td>".
	"</tr>";
while ($row=mysqli_fetch_row($result)) {
	
	echo "<tr>".
	"<td>".$row["0"]."</td>".
	"<td>".$row["1"]."</td>".
	"<td>".$row["2"]."</td>".
	"<td>".$row["3"]."</td>".
	"<td>".$row["4"]."</td>".
	"<td>".$row["5"]."</td>".
	"<td>".$row["6"]."</td>".
	"<td>".$row["7"]."</td>".
	"</tr>";

}






?>