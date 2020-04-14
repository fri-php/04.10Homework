<html>

<head>

	<meta charset="UTF-8">
	<title>A1083345_H4</title>

</head>	

<body bgcolor="#F6DDCC">

	<font face="微軟正黑體">

		<table>

			<tr bgcolor="#E59866">
				<th width="40px">No</th>
				<th width="100px">Fname</th>
				<th width="40px">Minit</th>
				<th width="100px">Lname</th>
				<th width="120px">Bdate</th>
				<th width="270px">Address</th>
				<th width="40px">Sex</th>
				<th width="100px">Salary</th>
			</tr>

			<?php

			$link=mysqli_connect("localhost", "root", "password", "php2020");

			$result=mysqli_query($link, "SELECT * FROM employee");

			while($row=mysqli_fetch_row($result))
			{
				echo "<tr bgcolor='#FBEEE6' align='center'>";

				foreach($row as $value)
					echo "<td>".$value."</td>";

				echo "</tr>";
			}

			?>

		</table>

	</font>

</body>

</html>