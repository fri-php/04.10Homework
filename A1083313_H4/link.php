<html>
<meta charset="utf-8">
<center>
<style>
table, th, td 
{
  border: 1px solid black;
  table-layout: fixed;
}
</style>

<?php

$link=mysqli_connect('localhost','root','password','php2020');
$SQL="SELECT * FROM employee";
$result=mysqli_query($link, $SQL);

echo '<table border="1"><tr><th>No</th><th>Fname</th><th>Minit</th><th>Lname</th><th>Bdate</th><th>Address</th><th>Sex</th><th>Salary</th>';

while($row=mysqli_fetch_row($result)){
	echo '<tr><td>'.$row["0"].'</td><td>'.$row["1"].'</td><td>'.$row["2"].'</td><td>'.$row["3"].'</td><td>'.$row["4"].'</td><td>'.$row["5"].'</td><td>'.$row["6"].'</td><td>'.$row["7"].'</td><tr/>';
} 

echo '</table>'; 

?>
</center>
</html>