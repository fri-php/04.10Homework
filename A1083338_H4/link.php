<html>
<head>
	<title>Link</title>
</head>
<body>
<table border="1">

<?php
$link=mysqli_connect('localhost','root','password','php2020');
$sql="SELECT * FROM employee";
$result=mysqli_query($link,$sql);

echo "<tr>";
echo "<th>No</th>"."<th>Fname</th>"."<th>Minit</th>"."<th>Lname</th>"."<th>Bdate</th>"."<th>Adress</th>"."<th>Sex</th>"."<th>Salary</th>";

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
	echo "<td>".$row["No"]."</td>"."<td>".$row["Fname"]."</td>"."<td>".$row["Minit"]."</td>"."<td>".$row["Lname"]."</td>"."<td>".$row["Bdate"]."</td>"."<td>".$row["Address"]."</td>"."<td>".$row["Sex"]."</td>"."<td>".$row["Salary"]."</td><br/>";
}

?>
</body>
</html>

