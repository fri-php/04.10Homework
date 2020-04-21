<?php
$link = @mysqli_connect('localhost', 'root', 'lin1073329', 'php2020');
mysqli_query($link, 'SET NAMES utf8');
$SQL = "SELECT * FROM employee";
$data = mysqli_query($link, $SQL);

echo "<table width=800 border=1>";
echo "<tr><td><b>No</b></td>";
echo "<td></td>";
echo "<td><b>Fname</b></td>";
echo "<td></td>";
echo "<td><b>Minit</b></td>";
echo "<td></td>";
echo "<td><b>Lname</b></td>";
echo "<td></td>";
echo "<td><b>Bdate</b></td>";
echo "<td colspan=3>Address</td>";
echo "<td><b>Sex</b></td>";
echo "<td></td>";
echo "<td><b>Salary</b></td></tr>";
while ($result = mysqli_fetch_array($data, MYSQLI_NUM)) {
    echo "<tr><td>$result[0]<td>";
    echo "<td>$result[1]<td>";
    echo "<td>$result[2]<td>";
    echo "<td>$result[3]<td>";
    echo "<td>$result[4]<td>";
    echo "<td>$result[5]<td>";
    echo "<td>$result[6]<td>";
    echo "<td>$result[7]<td></tr>";
}