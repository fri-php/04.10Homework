<?php

$link = @mysqli_connect(
        'localhost',
        'root',
        'password',
        'homework'
);

$SQL = "SELECT * FROM employee";

$result = mysqli_query($link , $SQL);

echo "<table border = '1'>";
echo   ("<tr>
            <th>No</th>
            <th>Fname</th>
            <th>Minit</th>
            <th>Lname</th>
            <th>Bdate</th>
            <th>Address</th>
            <th>Sex</th>
            <th>Salary</th>
        </tr>");
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
        echo "<td>".$row["No"]."</td>";
        echo "<td>".$row["Fname"]."</td>";
        echo "<td>".$row["Minit"]."</td>";
        echo "<td>".$row["Lname"]."</td>";
        echo "<td>".$row["Bdate"]."</td>";
        echo "<td>".$row["Address"]."</td>";
        echo "<td>".$row["Sex"]."</td>";
        echo "<td>".$row["Salary"]."</td>"."<br/>";
        echo "</tr>";
}
echo "</table>";

?>