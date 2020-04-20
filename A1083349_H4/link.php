<html>

<?php

$link=mysqli_connect('localhost','root','password','php2020');
$SQL="SELECT * FROM employee";
$result=mysqli_query($link,$SQL);

echo "<center><table border='2' width='600px'>";
echo "<tr><td>"."<b>No</b>"."</td><td>"."<b>Fname</b>"."</td><td>"."<b>Minit</b>"."</td><td>"."<b>Lname</b>"."</td><td>"."<b>Bdate</b>"."</td><td>"."<b>Address</b>"."</td><td>"."<b>Sex</b>"."</td><td>"."<b>Salary</b>"."</td>";
while ($row=mysqli_fetch_row($result))
{
	echo "<tr>";
	echo "<td>".$row["0"]."</td><td>".$row["1"]."</td><td>".$row["2"]."</td><td>".$row["3"]."</td><td>".$row["4"]."</td><td>".$row["5"]."</td><td>".$row["6"]."</td><td>".$row["7"]."</td>";
}
?>
</html>