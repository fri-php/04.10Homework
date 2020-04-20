<html>
<font face="微軟正黑體, Arial">
<style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>

<?php
echo "<center>";
echo "<table>";

$link = mysqli_connect('localhost','root','password','php2020');
$SQL="SELECT * FROM employee";
$result=mysqli_query($link, $SQL);

echo "<tr><td><center>No</center></td>";
echo "<td><center>Fname</center></td>";
echo "<td><center>Minit</center></td>";
echo "<td><center>Lname</center></td>";
echo "<td><center>Bdate</center></td>";
echo "<td><center>Address</center></td>";
echo "<td><center>Sex</center></td>";
echo "<td><center>Salary</center></td><tr/>";

while ($row=mysqli_fetch_row($result)){
	echo "<tr><td><center>".$row["0"]."</center></td>";
	echo "<td><center>".$row["1"]."</center></td>";
	echo "<td><center>".$row["2"]."</center></td>";
	echo "<td><center>".$row["3"]."</center></td>";
	echo "<td><center>".$row["4"]."</center></td>";
	echo "<td><center>".$row["5"]."</center></td>";
	echo "<td><center>".$row["6"]."</center></td>";
	echo "<td><center>".$row["7"]."</center></td></tr>";
}

if (mysqli_select_db($link,'php2020')){
  echo "<h2>資料庫: 開啟成功!</h2><br/>";
}
else{
   echo "資料庫: 開啟失敗!<br/>";
}
?>
</font>
</html>