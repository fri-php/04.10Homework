<html>
<?php

$link=mysqli_connect('localhost','root','password','php2020');
$SQL="SELECT * FROM employee";
$result=mysqli_query($link,$SQL);

echo "<center>".
	 "<table style='border:3px #eeb7fa solid;' cellpadding='5' border='5'>".
	 "<tr>".
	 "<td width='70px'>"."<B>"."No"."</B>"."</td>".
	 "<td width='70px'>"."<B>"."Fname"."</B>"."</td>".
	 "<td width='70px'>"."<B>"."Minit"."</B>"."</td>".
	 "<td width='70px'>"."<B>"."Lname"."</B>"."</td>".
	 "<td width='70px'>"."<B>"."Bdate"."</B>"."</td>".
	 "<td width='70px'>"."<B>"."Address"."</B>"."</td>".
	 "<td width='70px'>"."<B>"."Sex"."</B>"."</td>".
	 "<td width='70px'>"."<B>"."Salary"."</B>"."</td>".
	 "</tr>";

while ($row=mysqli_fetch_assoc($result)) 
{
	echo "<tr>".
		 "<td>".$row["No"]."</td>".
		 "<td>".$row["Fname"]."</td>".
		 "<td>".$row["Minit"]."</td>".
		 "<td>".$row["Lname"]."</td>".
		 "<td>".$row["Bdate"]."</td>".
		 "<td>"."NULL"."</td>".
		 "<td>".$row["Sex"]."</td>".
		 "<td>".$row["Salary"]."</td>"."</tr>";
}
echo "</table>"."</center>";

?>
</html>