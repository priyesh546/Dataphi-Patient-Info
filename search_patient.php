<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
	<title>Search Patient</title>
</head>
<body>
<br>
<form action="search_patient.php" method="post">
<center>
	<label><strong>Search Patient Inormation</strong></label>
	<input type="text" name="searchName" placeholder="Enter patient's firstname here" style="width: 250px">
	<input type="submit" name="search" value="search">
</center>
</form>
<br>
<br>

<?php

	include_once('connector.php');

	$first_name_search = null;
	if (isset($_POST['searchName'])) {
		$first_name_search = $_POST['searchName'];
	}

	
	if($first_name_search != null)
		$sql = "SELECT * FROM patient_data WHERE first_name='$first_name_search'";
	else
		$sql = "SELECT * FROM patient_data";

	$result = mysqli_query($conn,$sql);

	echo "$result->num_rows records found";

	echo "<table border='1'>
			<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Date of birth</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Phone Number</th>
			<th>Additional Information</th>
			</tr>";
if ($result->num_rows > 0) {
	while($row = mysqli_fetch_array($result))
		{
		echo "<tr>";
		echo "<td>"  . $row['first_name'] . "</td>";
		echo "<td>" . $row['last_name'] . "</td>";
		echo "<td>" . $row['date_of_birth'] . "</td>";
		echo "<td>" . $row['age'] . "</td>";
		echo "<td>" . $row['gender'] . "</td>";
		echo "<td>" . $row['phone_number'] . "</td>";
		echo "<td>" . $row['add_info'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";
	}
	else
		echo "0 results";

	$conn->close();
?>
<center><a href="index.html">New Patient</a></center>

</body>
</html>