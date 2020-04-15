<?php

$link=mysqli_connect('localhost','root','password','php2020');
if(mysqli_select_db($link,'php2020')){
	echo "資料庫連接成功<br/>";
}else{
	echo "資料庫連接失敗<br/>";
}

$SQL='SELECT * FROM employee';
$result=mysqli_query($link,$SQL);
if($result){
	echo "查詢成功<br/><br/>";
}else{
	echo "查詢失敗<br/>";
}

echo "<font size='5'>"."<center>"."employee資料表"."</center>"."</font>";
echo "<center>";
echo "<table border='3' cellpadding='10' width='800' height='400'>";
echo "<tr>";
echo "<td align='center' bgcolor='#FFEE99'>"."<b>"."No"."</td>"."</b>";
echo "<td align='center' bgcolor='#FFEE99'>"."<b>"."Fname"."</td>"."</b>";
echo "<td align='center' bgcolor='#FFEE99'>"."<b>"."Minit"."</td>"."</b>";
echo "<td align='center' bgcolor='#FFEE99'>"."<b>"."Lname"."</td>"."</b>";
echo "<td align='center' bgcolor='#FFEE99'>"."<b>"."Bdate"."</td>"."</b>";
echo "<td align='center' bgcolor='#FFEE99'>"."<b>"."Address"."</td>"."</b>";
echo "<td align='center' bgcolor='#FFEE99'>"."<b>"."Sex"."</td>"."</b>";
echo "<td align='center' bgcolor='#FFEE99'>"."<b>"."Salary"."</td>"."</b>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td align='center' bgcolor='#FFEE99'>".$row["No"]."</td>";
		echo "<td align='center' bgcolor='#D4FEEC'>".$row["Fname"]."</td>";
		echo "<td align='center' bgcolor='#D1DEFF'>".$row["Minit"]."</td>";
		echo "<td align='center' bgcolor='#27F59D'>".$row["Lname"]."</td>";
		echo "<td align='center' bgcolor='#FFDAD5'>".$row["Bdate"]."</td>";
		echo "<td align='center' bgcolor='#FFFFFF'>".$row["Address"]."</td>";
		echo "<td align='center' bgcolor='#FFE3FA'>".$row["Sex"]."</td>";
		echo "<td align='center' bgcolor='#A1E9FF'>".$row["Salary"]."</td>";
		echo "</tr>";

	}
echo "</table>";
echo "</center>";
?>