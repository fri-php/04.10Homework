<!DOCTYPE html>
<html>
<head>
<style type="text/css">
<!--
table{
    border-collapse:collapse;
    border:3px solid #626567;
    text-align:center;
}
td{border:3px solid #626567;}
-->
</style>
</head>
<body bgcolor="#FBEEE6">
<div align="center">
<table>
<tr>
<td width="90px" height="30px"><b>No</b></td>
<td width="90px"><b>Fname</b></td>
<td width="90px"><b>Minit</b></td>
<td width="90px"><b>Lname</b></td>
<td width="90px"><b>Bdate</b></td>
<td width="90px"><b>Address</b></td>
<td width="90px"><b>Sex</b></td>
<td width="90px"><b>Salary</b></td>
</tr>
<?php  
$link=mysqli_connect("localhost","root","password","php2020");
$sqli="SELECT * FROM employee";
$result= mysqli_query($link,$sqli);
while($row=mysqli_fetch_assoc($result))
{echo
"<tr>".
"<td>".$row["No"]."</td>".
"<td>".$row["Fname"]."</td>".
"<td>".$row["Minit"]."</td>".
"<td>".$row["Lname"]."</td>".
"<td>".$row["Bdate"]."</td>".
"<td>".$row["Address"]."</td>".
"<td>".$row["Sex"]."</td>".
"<td>".$row["Salary"].
"</td>"."<br/>"."</tr>";}

?>
</body>
</div>
</table>
</html>
