<?php
$link=mysqli_connect('localhost','root','password','for hw');
$SQL="SELECT * FROM employee";
$result=mysqli_query($link, $SQL);

echo "<table style=border:1px padding:5px rules=all cellpadding=5><tr><th width=80><strong>員工名</strong></th><th width=80><strong>minit</strong></th><th width=80><strong>員工姓</strong></th><th width=80><strong>生日</strong></th><th width=80><strong>性別</strong></th><th width=80><strong>住址</strong></th><th width=80><strong>薪水</strong></th>";
while($row=mysqli_fetch_assoc($result))
{ 

		echo "<tr><td>".$row["Fname"]."</td>";
		echo "<td>".$row["Minit"]."</td>";
		echo "<td>".$row["Lname"]."</td>";
		echo "<td>".$row["Bdate"]."</td>";
		echo "<td>".$row["Sex"]."</td>";
		echo "<td>".$row["Address"]."</td>";
		echo "<td>".$row["Salary"]."</td>";
}
