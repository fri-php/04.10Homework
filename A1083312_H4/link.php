<?php
$link=mysqli_connect('localhost','root','20001005','php2020');

if (mysqli_select_db($link,'php2020')) {
	echo "correct";
}

else echo "fail";

echo "<br>";

$SQL="SELECT*FROM employee";
$result=mysqli_query($link,$SQL);
echo "<center>";
echo "<table style='border:4px #CA82FF solid;' rules='all' cellpadding='10';>";
echo "<tr>".
	"<td>"."No"."</td>".
	"<td>"."Fname"."</td>".
	"<td>"."Minit"."</td>".
	"<td>"."Lname"."</td>".
	"<td>"."Bdate"."</td>".
	"<td>"."Adress"."</td>".
	"<td>"."Sex"."</td>".
	"<td>"."Salary"."</td>".
	"</tr>";

while ($row=mysqli_fetch_row($result)) {
	echo "<tr>";
	echo "<td>".$row["0"]."</td>";
	echo "<td>".$row["1"]."</td>";
	echo "<td>".$row["2"]."</td>";
	echo "<td>".$row["3"]."</td>";
	echo "<td>".$row["4"]."</td>";
	echo "<td>".$row["5"]."</td>";
	echo "<td>".$row["6"]."</td>";
	echo "<td>".$row["7"]."</td>";
	
	echo "</tr>";


}
echo "</table>";
echo "</center>";
?>
