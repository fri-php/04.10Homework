<?php


$link=mysqli_connect('localhost','root','password','php2020');

$SQL="SELECT * FROM employee ";

$result=mysqli_query($link,$SQL);


 echo "<table border = '2'><tr align='center'>";

while ( $meta = mysqli_fetch_field($result) ) {
     echo "<td>" . $meta->name . "</td>";

}
while( $row = mysqli_fetch_assoc($result) )
{ 
   echo "<tr><td>".$row["No"]."<td>".$row["Fname"]."<td>".$row["Minit"]."<td>".$row["Lname"]."<td>".$row["Bdate"]."<td>".$row["Address"]."<td>".$row["Sex"]."<td>".$row["Salary"]."</tr>";
}        

 ?>

