<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="../js/logvalidation.js"></script>
</head>
<body>
    <div class="center">
        

        <form id="login-form" method="post" action="../controllers/logincheck.php">
            <fieldset>
            <h1>Login Form</h1>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
            <br><span id="username-error" class="error-message"></span><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br><span id="password-error" class="error-message"></span><br><br>

            <input type="submit" value="Login" onclick="return validateForm();"><br><br>
            <a href="forgotpass.php">Forgot password?</a><br><br>

            <a href="../index.html">Back</a>

            </fieldset>
            
        </form>
    </div>
</body>
