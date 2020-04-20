<?php
$link=mysqli_connect('localhost','root','password','php2020');
$SQL="SELECT * FROM employee";
$result=mysqli_query($link, $SQL);
echo "<table border='1'>".
     "<tr>".
     "<th>"."<strong>"."No"."</strong>"."</th>". 
     "<th>"."<strong>"."Fname"."</strong>"."</th>". 
     "<th>"."<strong>"."Minit"."</strong>"."</th>". 
     "<th>"."<strong>"."Lname"."</strong>"."</th>". 
     "<th>"."<strong>"."Bdate"."</strong>"."</th>". 
     "<th>"."<strong>"."Address"."</strong>"."</th>". 
     "<th>"."<strong>"."Sex"."</strong>"."</th>". 
     "<th>"."<strong>"."Salary"."</strong>"."</th>".
     "</tr>"; 
while ($row=mysqli_fetch_assoc($result))
{
echo  "<tr>". 
      "<th>".$row["No"]."</th>".
      "<th>".$row["Fname"]."</th>".
      "<th>".$row["Minit"]."</th>".
      "<th>".$row["Lname"]."</th>".
      "<th>".$row["Bdate"]."</th>".
      "<th>".$row["Address"]."</th>".
      "<th>".$row["Sex"]."</th>".
      "<th>".$row["Salary"]."</th>";	
}
echo "</table>";
?>