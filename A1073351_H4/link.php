<?php

echo "<table>";

$link=mysqli_connect('localhost','root','password','php2020');

$SQL="SELECT * FROM employee";
$result=mysqli_query($link,$SQL);//取值
echo "<table style='border:3px #E6E6FA solid;' rules='all' cellpadding='10';>";
echo "<tr><td>No</td>";
echo "<td>Fname</td>";
echo "<td>Minit</td>";
echo "<td>Lname</td>";
echo "<td>Bdate</td>";
echo "<td>Address</td>";
echo "<td>Sex</td>";
echo "<td>Salary</td><tr/>";

while ($row=mysqli_fetch_row($result)){
	echo "<tr><td>".$row["0"]."</td>";
	echo "<td>".$row["1"]."</td>";
	echo "<td>".$row["2"]."</td>";
	echo "<td>".$row["3"]."</td>";
	echo "<td>".$row["4"]."</td>";
	echo "<td>".$row["5"]."</td>";
	echo "<td>".$row["6"]."</td>";
	echo "<td>".$row["7"]."</td></tr>";
}

if (mysqli_select_db($link,'php2020')){
  echo "資料庫: 開啟成功(ゝ∀･)b!<br/>";
}
else{
   echo "資料庫: 開啟失敗QQ!<br/>";
}
?>