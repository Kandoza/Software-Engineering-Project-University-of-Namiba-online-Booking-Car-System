<!DOCTYPE html>
<html>
<head>
	<title>Register, login and logout user php mysql</title>
</head>
<body>
<div class="header">
	<h1>Register, login and logout user php mysql</h1>
</div>

<form method="post" action="process.php">
	<table>
		<tr>
			<td>Firstname:</td>
			<td><input type="text" name="firstname" class="textInput"></td>
		</tr>
		<tr>
			<td>Lastname:</td>
			<td><input type="text" name="lastname" class="textInput"></td>
		</tr>
		<tr>
			<td>Type of Vehicle:</td>
			<td><input type="text" name="vehicle" class="textInput"></td>
		</tr>
		<tr>
			<td>Days:</td>
			<td><input type="text" name="Days" class="textInput"></td>
		</tr>
		<tr>
			<td>Distance:</td>
			<td><input type="text" name="Distance" class="textInput"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="register_btn" class="Register"></td>
		</tr>

	</table>
</form>

</body>
</html>