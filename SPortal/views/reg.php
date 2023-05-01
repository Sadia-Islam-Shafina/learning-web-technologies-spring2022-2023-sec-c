<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="../css/reg.css">
    <script src="../js/regvalidation.js"></script>
</head>
<body>
    
    <form method="post" action="../controllers/regcheck.php" onsubmit="return validateForm()">
        <fieldset>
            <h1>Registration Form</h1>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br>
            <span class="error" id="username_error"></span>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email"><br>
            <span class="error" id="email_error"></span>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br>
            <span class="error" id="password_error"></span>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password"><br>
            <span class="error" id="confirm_password_error"></span><br><br><br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
    <br>
    <br>
    <button><a href="../index.html">Back</a></button>
    

    <script type="text/javascript" src="script.js"></script>
</body>
</html>
