<html>
<head>
	<title>Initiating Transfer</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
	$sid = mysqli_real_escape_string($mysqli, $_POST['sid']);
	$amount = mysqli_real_escape_string($mysqli, $_POST['amount']);
	$tid = mysqli_real_escape_string($mysqli, $_POST['tid']);


	// checking empty fields
	if(empty($sid) || empty($amount) || empty($tid)) {

		if(empty($sid)) {
			echo "<font color='red'>Your ID field is empty.</font><br/>";
		}

		if(empty($amount)) {
			echo "<font color='red'>Amount field is empty.</font><br/>";
		}

		if(empty($tid)) {
			echo "<font color='red'>Trnasfer ID field is empty.</font><br/>";
		}

}
	else {
		// if all the fields are filled (not empty)

		//insert data to database
		$result = mysqli_query($mysqli, "INSERT INTO transfer(sid,amount,tid) VALUES('$sid','$amount','$tid')");

		//display success message
		echo "<font color='green'>Transfer initiated.";
		echo "<br/><a href='homepage.html'>Connecting to payment geteway</a>";
	}
}
?>
</body>
</html>
