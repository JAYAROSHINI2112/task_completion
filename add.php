<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php

include_once("inc/confi_mongodb.php");

if(isset($_POST['Submit'])) {	
	$user = array (
				'age' => $_POST['age'],
				'dob' => $_POST['dob'],
				'contact' => $_POST['contact']
			);
		
	// checking empty fields
	$errorMessage = '';
	foreach ($user as $key => $value) {
		if (empty($value)) {
			$errorMessage .= $key . ' field is empty<br />';
		}
	}
	
	if ($errorMessage) {
		// print error message & link to the previous page
		echo '<span style="color:red">'.$errorMessage.'</span>';
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";	
	} else {
		//insert data to database table/collection aged 'users'
		$db->users->insert($user);
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
