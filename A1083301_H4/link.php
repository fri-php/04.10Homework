<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf8">	
</head>	
<body bgcolor="#e6f7ff">

<?php

$link=mysqli_connect('localhost','root','password','php2020');

$SQL="SELECT * FROM employee";

$result=mysqli_query($link, $SQL);

echo '<table border="1"> <tr><th>No</th><th>Fname</th><th>Minit</th><th>Lname</th><th>Bdate</th><th>Address</th><th>Sex</th><th>Salary</th>';

while($row=mysqli_fetch_row($result))
{
	echo '<tr><td>'.$row["0"].'</td><td>'.$row["1"].'</td><td>'.$row["2"].'</td><td>'.$row["3"].'</td><td>'.$row["4"].'</td><td>'.$row["5"].'</td><td>'.$row["6"].'</td><td>'.$row["7"].'</td><tr/>';
} 

/*
開啟指定的資料庫
if(mysqli_select_db($link,'php2020'))
{
	echo "資料連結成功<br/>";
}
else
{
	echo "資料連結失敗<br/>";
} */

echo '</table>'; 
?>

</body>
</html>