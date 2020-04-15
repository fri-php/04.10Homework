<?php



$link=mysqli_connect('localhost','root','password','php2020');
$SQL="SELECT * FROM employee";
//if (!$link) {
//	echo "連接失敗<br>";
//}else{
//	echo "連接成功<br>";
//}
echo "<table border=1>";
	echo "<tr><td><b>No</b></td>";
	echo "<td><b>Fname</b></td>";
	echo "<td><b>Minit</b></td>";
	echo "<td><b>Lname</b></td>";
	echo "<td><b>Bdate</b></td>";
	echo "<td><b>Address</b></td>";
	echo "<td><b>Sex</b></td>";
	echo "<td><b>Salary</b></td></tr>";
$result=mysqli_query($link,$SQL);

while ($row=mysqli_fetch_assoc($result)) {

	echo "<tr><td>".$row["No"]."</td>";
	echo "<td>".$row["Fname"]."</td>";
	echo "<td>".$row["Minit"]."</td>";
	echo "<td>".$row["Lname"]."</td>";
	echo "<td>".$row["Bdate"]."</td>";
	echo "<td>".$row["Address"]."</td>";
	echo "<td>".$row["Sex"]."</td>";
	echo "<td>".$row["Salary"]."</td></tr>";
}

?>