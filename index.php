<!DOCTYPE html>
	<head>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
		<title>Patient Entry Form</title>
	</head>
	<body>
		<div class="container">
			<form method="post" action="insert_data.php" method="post">
				<h2>Patient's Information</h2>
				<table>
				<tr>
					<td><label><strong>First Name</strong></label></td>
					<td><input type="text" name="firstname" id=firstname" placeholder="First Name" pattern="^[A-Za-z]*$" required="true" oninvalid="this.setCustomValidity('Enter valid name')" oninput="setCustomValidity('')"></td>
				<tr>
					<td><label><strong>Last Name</strong></label></td>
					<td><input type="text" name="lastname" id="lastname" placeholder="Last Name" pattern="^[A-Za-z]*$" required="true" oninvalid="this.setCustomValidity('Enter valid name')" oninput="setCustomValidity('')"></td>
				</tr>
				<tr>
					<td><label><strong>Date of birth</strong></label></td>
					<td><input type="date" name="DOB" id="DOB" onchange="calculateAge()" required="true"></td>
				</tr>
				<tr>
					<td><label><strong>Age</strong></label></td>
					<td><input type="text" name="age" id="age" placeholder="Age"></td>
				</tr>
				<tr>
					<td><label><strong>Gender</strong></label></td>
					<td><select name="gender">
					        <option value="Male">Male</option>
					        <option value="Female">Female</option>
				    	</select>
				    </td>
			    </tr>
			    <tr>
				    <td><label><strong>Phone Number</strong></label></td>
				    <td><input type="text" name="phonenumber" id="phonenumber" placeholder="Phone Number" pattern="^[7-9][0-9]{9}$" required="true" oninvalid="this.setCustomValidity('Enter valid phonenumber')" oninput="setCustomValidity('')"></td>
			    </tr>
			    <tr>
			    	<td><label><strong>Additional Information</strong></label></td>
			    	<td><textarea name="addinfo" placeholder="Additional Information"></textarea></td>
			    </tr>
			    <tr>
			    <td></td>
			    <td><input type="submit" name="Save" value="Save" on="enableAge()"></td>
			    </tr>
			    <tr>
			    	<td></td>
			    	<td><a href="search_patient.php">Search Patient data</a></td>
			    </tr>
			    </table>
			</form>
		</div>
		<script type="text/javascript" src="script/validate.js"></script>
	</body>
<html>