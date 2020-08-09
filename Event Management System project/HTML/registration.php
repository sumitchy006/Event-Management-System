<html>
<head>
	<title>Registration Form</title>
	<link type="text/css" rel="stylesheet" href="../CSS/registration.css"/>
</head>
 
<body>
	<h3>REGISTRATION FORM</h3>

	 <form action="registrationPhp.php" method="post">
		<table align="center" cellpadding = "10">
		 
		<!----- First Name ---------------------------------------------------------->
		<tr>
		<td>FIRST NAME</td>
		<td><input type="text" name="fname" maxlength="30"/>

		</td>
		</tr>
		 
		<!----- Last Name ---------------------------------------------------------->
		<tr>
		<td>LAST NAME</td>
		<td><input type="text" name="lname" maxlength="30"/>

		</td>
		</tr>
		 
		<!----- Date Of Birth -------------------------------------------------------->

		 
		<!----- Email Id ---------------------------------------------------------->
		<tr>
		<td>EMAIL ID</td>
		<td><input type="text" name="email" maxlength="100" /></td>
		</tr>
		 
		<!----- Mobile Number ---------------------------------------------------------->
		<tr>
		<td>MOBILE NUMBER</td>
		<td>
		<input type="text" name="mobile" maxlength="11" />

		</td>
		</tr>

		<!----- date---------------------------------------------------------->
		<tr>
		<td>DATE/TIME</td>
		<td>
		<input type="text" name="date_time" maxlength="" />

		</td>
		</tr>
		 
		<!----- Gender ----------------------------------------------------------->
		<tr>
		<td>NO.OF PERSON</td>
		<td>
		<input type="text" name="person" maxlength="" />

		</td>
		</tr>
		<!----- Event type ----------------------------------------------------------->
		<tr>
		<td>EVENT TYPE</td>
		<td>

		<select id="" name="event">

		<option value="-1">                   </option>
		<option value="Birthday">Birthday</option>
		<option value="Holud">Holud</option>
		<option value="Wedding">Wedding</option>
		<option value="Office party">Office party</option>
		<option value="House Party">House Party</option>

		</select>
		 

		</td>
		</tr>
		<!-----decoration ----------------------------------------------------------->
		<tr>
		<td>DECORATION</td>
	
	
		<td>
		<select name="decoration">
			<option value="yes">Yes</option>
			<option value="no">No</option>
		</select>
		
		</td>
		</tr>

		<!----- FOOD ----------------------------------------------------------->
		<tr>
		<td>FOOD</td>
		<td>
		<select name="food">
			<option value="lunch">Lunch</option>
			<option value="dinner">Dinner</option>
		</select>

		</td>
		</tr>
		 
		<!----- Submit and Reset ------------------------------------------------->
		<tr>
		<td colspan="2" align="center">
		<input type="submit" value="Submit" name="submit">
		<input type="reset" value="Reset">
		</td>
		</tr>
		</table>
	 
	</form>
 
</body>
</html>