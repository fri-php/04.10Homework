<?php
$link = mysqli_connect( 
            'localhost',  
            'root',       
            'a1073311',  
            '0417dbtest');

$SQL="SELECT * FROM employee";
if($result=mysqli_query($link, $SQL))
{
	echo "<table border='1'><tr><td>No</td>";
	echo "<td>Fname</td><td>Minit</td>";
	echo "<td>Lname</td><td>Bdate</td>";
	echo "<td>Address</td><td>Sex</td>";
	echo "<td>Salary</td></tr>";

	while( $row = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["No"]."</td><td>".$row["Fname"]."</td>";
		echo "<td>".$row["Minit"]."</td><td>".$row["Lname"]."</td>";
		echo "<td>".$row["Bdate"]."</td><td>".$row["Address"]."</td>";
		echo "<td>".$row["Sex"]."</td><td>".$row["Salary"]."<br/></td></tr>";
	}
	echo "</table>";
}
else {
		echo "can't find the data";
     }

?>