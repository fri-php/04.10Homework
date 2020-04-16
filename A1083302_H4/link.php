<?php

echo "<table border='1'>".
     "<tr>".
     "<th bgcolor='#FFB7DD'>"."<b>"."No"."</b>"."</th>".
     "<th bgcolor='#FFB3FF'>"."<b>"."Fname"."</b>"."</th>".
     "<th bgcolor='#E8CCFF'>"."<b>"."Minit"."</b>"."</th>".
     "<th bgcolor='#CCDDFF'>"."<b>"."Lname"."</b>"."</th>".
     "<th bgcolor='#99FFFF'>"."<b>"."Bdate"."</b>"."</th>".
     "<th bgcolor='#33FFFF'>"."<b>"."Address"."</b>"."</th>".
     "<th bgcolor='#77FFEE'>"."<b>"."Sex"."</b>"."</th>".
     "<th bgcolor='#77FFCC'>"."<b>"."Salary"."</b>"."</th>".
     "</tr>";

$link=mysqli_connect('localhost','root','password','php2020');

$SQL="SELECT * FROM employee";
$result=mysqli_query($link , $SQL);

while($row=mysqli_fetch_assoc($result)){
	echo "<tr>".
	     "<th bgcolor='#FFB7DD'>".$row["No"]."</th>".
	     "<th bgcolor='#FFB3FF'>".$row["Fname"]."</th>".
	     "<th bgcolor='#E8CCFF'>".$row["Minit"]."</th>".
	     "<th bgcolor='#CCDDFF'>".$row["Lname"]."</th>".
	     "<th bgcolor='#99FFFF'>".$row["Bdate"]."</th>".
	     "<th bgcolor='#33FFFF'>".$row["Address"]."</th>".
	     "<th bgcolor='#77FFEE'>".$row["Sex"]."</th>".
	     "<th bgcolor='#77FFCC'>".$row["Salary"]."</th>".
	     "</tr>";
}
    echo "</table>";




?>    