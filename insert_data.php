<?php
	include_once('connector.php');

	//mysqli_select_db($conn,$db);

	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$dob = $_POST['DOB'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$phonenumber = $_POST['phonenumber'];
	$addinfo = $_POST['addinfo'];

	$sql = "INSERT INTO heroku_d967a08d6902966.patient_data VALUES('$first_name','$last_name','$dob','$age','$gender','$phonenumber','$addinfo')";

	if ($conn->query($sql) === TRUE) {
    	header('Location: search_patient.php');
		exit;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>