<!DOCTYPE html>
<html>
<head>
    <title>Join club</title>
    <link rel="stylesheet" type="text/css" href="../css/joinsomoy.css">
    <script src="../js/joinsomoyvalidation.js"></script>
</head>
<body>
    

    <form method="post" action="../controllers/joinsomoycheck.php" onsubmit="return validateForm()">
        <fieldset>
            <h1>Joining Form</h1>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
            <br><span id="username-error" class="error-message"></span>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br><span id="password-error" class="error-message"></span>

            
            <input type="submit" value="Submit" onclick="return validateForm();"><br><br>
            <br>
            <br>

            <a href="club.php">Back</a>
        </fieldset>
    </form>

   
</body>
</html>
