<?php
$link=mysqli_connect('localhost','root','password','php2020');


$SQL="SELECT*FROM employee";
$result=mysqli_query($link,$SQL);
echo "<center>";
echo "<table style='border:4px #CA82FF solid;' rules='all' cellpadding='10';>";
echo "<tr>".
	"<th>"."No"."</th>".
	"<th>"."Fname"."</th>".
	"<th>"."Minit"."</th>".
	"<th>"."Lname"."</th>".
	"<th>"."Bdate"."</th>".
	"<th>"."Adress"."</th>".
	"<th>"."Sex"."</th>".
	"<th>"."Salary"."</th>".
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
