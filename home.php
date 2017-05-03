<!DOCTYPE html>
<html>
<head>
	<title>REQUEST FOR TRANSPORT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h1>REQUEST FOR TRANSPORT</h1>
</div>

<form method="post" action="process.php">
	<table>
		<tr>
			<td>Transport required by:</td>
			<td><input type="text " name="required_by" class="textInput" required></td>
		</tr>
		<tr>
			<td>Contact:</td>
			<td><input type="text" name="contact" class="textInput" required ></td>
		</tr>
		<tr>
			<td>Department:</td>
			<td><input type="text" name="department" class="textInput"></td>
		</tr>
		<tr>
			<td>Budget vote:</td>
			<td><input type="text" name="budget_vote" class="textInput"></td>
		</tr>
		<tr>
			<td>Number of Passngers:</td>
			<td><input type="text" name="Number_of_passengers" class="textInput"></td>
		</tr>
		<tr>
		<td>Please attach a list of name of passenger:</td>
			<td><input type="file" name="Document"  class="textInput"></td>
		</tr>
		<tr>
			<td>Distance:</td>
			<td><input type="text" name="Distance" class="textInput"></td>
		</tr>
		<tr>
			<td>Transport required from(Date):</td>
			<td><input type="Date" name="required_from" class="textInput" required=""></td>
		</tr>
		<tr>
			<td>Time:</td>
			<td><input type="Time" name="Time" class="textInput"></td>
		</tr>
		<tr>
			<td>Transport required to(Date):</td>
			<td><input type="Date" name="required_to" class="textInput" required=""></td>
		</tr>
		<tr>
			<td>Time:</td>
			<td><input type="Time" name="Time2" class="textInput"></td>
		</tr>
		<tr>
			<td>Purpose of trip:</td>
			<td><TEXTAREA type="text" name="message" class="textInput"></TEXTAREA></td>
		</tr>
		<tr>
			<td>Route to be followed:</td>
			<td><TEXTAREA type="text" name="message2" class="textInput"></TEXTAREA></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="register_btn" class="Register"></td>
		</tr>

	</table>
</form>

</body>
</html>