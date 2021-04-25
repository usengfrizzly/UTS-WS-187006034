<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM biomhs"); // using mysqli_query instead
?>

<html>
<head>	
	<title>UTS-WS-187006034</title>
</head>

<body>
<a href="add.php">Add New Data</a><br/><br/>
<a href="json/json.php">JSON</a><br/><br/>
<a href="xml/xml.php">XML</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>No</td>
		<td>NPM</td>
		<td>Nama</td>
		<td>Asal</td>
		<td>No Telp</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['npm']."</td>";
		echo "<td>".$res['nama']."</td>";
		echo "<td>".$res['asal']."</td>";
		echo "<td>".$res['notelp']."</td>";	
	}
	?>
	</table>
</body>
</html>
