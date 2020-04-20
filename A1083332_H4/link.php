<?php

$con=mysqli_connect('localhost','root','password','user');
$SQL="SELECT * FROM php2020";
$result=mysqli_query($con,$SQL);

echo "<table border=1>";
echo "<tr>"."<th><B>No</B></th>".
"<th><B>Fname</B></th>"."<th><B>Minit</B></th>"."<th><B>Lname</B></th>"."<th><B>Bdate</B></th>"."<th><B>Address</B></th>"."<th><B>Sex</B></th>"."<th><B>Salary</B></th>";

while($row=mysqli_fetch_assoc($result))
{	
	 echo "<tr>";
	 echo "<td>".$row["No"]."</td><td>".$row["Fname"]."</td><td>".$row["Minit"]."</td><td>".$row["Lname"]."</td><td>".$row["Bdate"]."</td><td>"."NULL"."</td><td>".$row["Sex"]."</td><td>".$row["Salary"]."</td>";
	 echo "</tr>";
}
	echo "</table>";
?>