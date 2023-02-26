<?php
include_once("inc/confi_mongodb.php");
$result = $db->users->find()->sort(array('_id' => -1));
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Age</td>
		<td>Dob</td>
		<td>Contact</td>
	</tr>
	<?php 	
	foreach ($result as $res) {
		echo "<tr>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['dob']."</td>";
		echo "<td>".$res['contact']."</td>";	
		
	}
	?>
	</table>
</body>
</html>
