<?php

$link=mysqli_connect('localhost','root','amber052181','php2020');

mysqli_query($link,'SET NAMES utf8');

$SQL = "SELECT *FROM employee";

$result=mysqli_query($link,$SQL);
/*
if(mysqli_select_db($link,php2020))
{
	echo "資料庫開啟成功";
}
else
{
	echo "資料庫開啟失敗";
}
*/
echo '<table border="1">';
echo '<tr><th>No</th><th>Fname</th><th>Minit</th><th>Lname</th><th>Bdate</th><th>Address</th><th>Sex</th><th>Salary</th>';

while($row=mysqli_fetch_assoc($result))
{ 
    echo '<tr><td>'.$row["No"].'</td>
              <td>'.$row["Fname"].'</td>
              <td>'.$row["Minit"].'</td>
              <td>'.$row["Lname"].'</td>
              <td>'.$row["Bdate"].'</td>
              <td>'.$row["Address"].'</td>
              <td>'.$row["Sex"].'</td>
              <td>'.$row["Salary"].'</td></tr>';
}
echo '</table>';
?>