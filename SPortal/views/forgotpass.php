<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>

	<link rel="stylesheet" type="text/css" href="../css/forgotpass.css">
	<script src="../js/retrieve_password.js"></script>
</head>

<body>
	<h1>Forgot Password</h1>
	<form method="post" action="../controllers/retrieve_password.php">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username"><br><br>
		<br><span id="username_error" class="error_message"></span><br><br>



		<label for="email">Email:</label>
		<input type="text" name="email" id="email"><br><br>
		<br><span id="email_error" class="error_message"></span><br><br>


		<input type="submit" value="Login" onclick="return validateForm();">
	</form>
    <br>
    <a href="login.php">Back</a>
</body>
</html>