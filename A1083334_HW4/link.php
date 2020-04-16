
<?php

$link=mysqli_connect('localhost','root','password','php2020');

$SQL="SELECT*FROM employee";

$result=mysqli_query($link, $SQL);

if($result)
{
 echo "語法成功"."<br/>";
}
else
{
 echo "語法失敗";
}

if(mysqli_select_db($link,php2020))
{
 echo "資料庫開啟成功";
}
else
{
 echo "資料庫開啟失敗";

}

echo '<table border="1">';
echo '<tr><td><b>No</b></td><td><b>Fname</b></td><td><b>Minit</b></td><td><b>Lname</b></td><td><b>Bdate</b></td><td><b>Address</b></td><td><b>Sex</b></td><td><b>Salary</b></td></tr>';

while($row=mysqli_fetch_assoc($result))
{
 echo "<tr><td>".$row["No"]."</td><td>".$row["Fname"]."</td><td>".$row["Minit"]."</td><td>".$row["Lname"]."</td><td>".$row["Bdate"]."</td><td>".$row["Address"]."</td><td>".$row["Sex"]."</td><td>".$row["Salary"]."</td></tr>"."<br/>";
}
echo "</table>";

?>