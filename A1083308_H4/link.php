<style type="text/css">
	table{
	font-size: 18px ;
	text-align: center ;
	border-collapse:collapse ;
	}
th{
	background-color: #FFE153;
	padding:5px 20px 5px ;
	border: 3px solid ;
}
td{
	background-color: #FFFF93 ;
	padding:5px 20px 5px ;
	border: 3px solid ;
}
body{
	background-color: #FFEEDD;
}
</style>
<body>
<?php

$link=mysqli_connect(
					 '127.0.0.1:3308',
					 'root',
					 'a1083308',
					 'php2020'
					);
$SQL="SELECT * FROM employee";
$result=mysqli_query($link,$SQL);


echo "<center>";
echo "<table border=1>";

echo "<tr>";
echo 	"<th> No </th>";
echo 	"<th> Fname </th>";
echo 	"<th> Minit </th>";
echo 	"<th> Lname </th>";
echo 	"<th> Bdate </th>";
echo 	"<th> Address </th>";
echo 	"<th> Sex </th>";
echo 	"<th> Salary </th>";
echo "</tr>";

while ($row=mysqli_fetch_row($result)) {
	echo "<tr>";
	foreach ($row as $key => $value) {
		echo "<td>";
		echo 	$value;
		echo "</td>";
	}
	echo "</tr>";
}
?>
</body>