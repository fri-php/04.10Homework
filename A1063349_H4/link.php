<?php
$link = mysqli_connect("localhost","root","password","php2020","3308");//連到資料庫

$SQL="SELECT * FROM employee";  //選擇資料表
$result= mysqli_query($link,$SQL); 

echo "<table border='1' style='width:75%' bordercolor='#66ccff'  align='center'>";
echo "<tr>";
echo "<b><th>No</th></b>";
echo "<b><th>Fname</th></b>";
echo "<b><th>Minit</th></b>";
echo "<b><th>Lname</th></b>";
echo "<b><th>Bdate</th></b>";
echo "<b><th>Address</th></b>";
echo "<b><th>Sex</th></b>";
echo "<b><th>Salary</th></b>";
echo "</tr>";


while( $row = mysqli_fetch_assoc($result) ){ 
//   echo $row["No"]."-".$row["Fname"]."<br/>";
    echo "<tr>";
    echo "  <td>".$row["No"]."</td>
            <td>".$row["Fname"]."</td>
            <td>".$row["Minit"]."</td>
            <td>".$row["Lname"]."</td>
            <td>".$row["Bdate"]."</td>
            <td>".$row["Address"]."</td>
            <td>".$row["Sex"]."</td>
            <td>".$row["Salary"]."</td>  ";
    echo "</tr>";      
}

?>
