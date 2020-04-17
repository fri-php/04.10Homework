<?php

$idd=$_POST["id"];
$pwdd=$_POST["pwd"];

$link=mysqli_connect('localhost','root','password','php2020'); 
$SQL="SELECT * FROM employee  ";
$result=mysqli_query($link,$SQL);

echo "<table border='1'>";
echo "<tr><th>NO</th><th>FNAME</th><th>MINIT</th><th>LNAME</th><th>BDATE</th><th>ADRESS</th><th>SEX</th><th>SALARY</th></tr>";
  while ($row = mysqli_fetch_row($result)) {
  	echo "<tr>";
  	echo "<td>".$row["0"]."</td><td>".$row["1"]."</td><td>".$row["2"]."</td><td>".$row["3"]."</td><td>".$row["4"]."</td><td>".$row["5"]."</td><td>".$row["6"]."</td><td>".$row["7"]."</td>";
  	echo "</tr>";
  }
  echo "</table>";

?>