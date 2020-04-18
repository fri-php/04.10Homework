<?php

$link=mysqli_connect('localhost','root','2000year','php2020');
$SQL="SELECT * FROM employee";
$result=mysqli_query($link,$SQL);

echo "<table  border='2' align='center'>".
	 "<tr><td><b>No</td><td><b>Fname</td><td><b>Lname</td><td><b>Sex</td><td><b>Bdate</td><td><b>Minit</td><td><b>Address</td><td><b>Salary</td></tr>";


while ($row=mysqli_fetch_row($result)) {
		echo "<tr>".
        "<td>".$row["0"]."</td>"."<td>".$row["1"]."</td>".
        "<td>".$row["2"]."</td>"."<td>".$row["3"]."</td>". 
        "<td>".$row["4"]."</td>"."<td>".$row["5"]."</td>".
        "<td>".$row["6"]."</td>"."<td>".$row["7"]."</td>".
		"</tr>";
	}	
echo "</table>";


?>

<center>
<form>
<body bgcolor="#F3D4FF" >

</form>
</center>