<?php
$ID=$_POST["id"]."<br/>";
$password=$_POST["pwd"]."<br/>";



$link=mysqli_connect('localhost','root','a0976242820','php2020');

$sql="SELECT * FROM employee";

mysqli_query($link, 'SET NAMES utf8');
if ($result = mysqli_query($link, $sql))
{

} 
echo '<table border="1">';
echo '<tr><td>No</td><td>Fname</td><td>Minit</td><td>Lname</td><td>Bdate</td><td>Address</td><td>Sex</td><td>Salary</td></tr>';
while($row=mysqli_fetch_assoc($result))
{
	
	echo "<tr><td>".$row["No"]."</td><td>".$row["Fname"]."</td><td>".$row["Minit"]."</td><td>".$row["Lname"]."</td><td>".$row["Bdate"]."</td><td>".$row["Address"]."</td><td>".$row["Sex"]."</td><td>".$row["Salary"]."</td></tr>"."<br/>";

}
echo "</table>";


?>