<!DOCTYPE html>
<html>
<head>
    <title>Doctor Login</title>
    <link rel="stylesheet" type="text/css" href="Styles.css">
</head>
<body>
    <div id="doctorLogin">
        <h2>Doctor Login</h2>
        <form id="doctorLoginForm" onsubmit="return validateForm()" action="doctormenu.php" method="POST">
            <div class="form-group">
                <label for="doctorUsername">Username:</label>
                <input type="text" id="doctorUsername" name="doctorUsername">
                <div id="doctorUsernameError" class="error-message"></div>
            </div>
            <div class="form-group">
                <label for="doctorPassword">Password:</label>
                <input type="password" id="doctorPassword" name="doctorPassword">
                <div id="doctorPasswordError" class="error-message"></div>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        function validateForm() {
            var username = document.getElementById("doctorUsername").value;
            var password = document.getElementById("doctorPassword").value;
            var usernameError = document.getElementById("doctorUsernameError");
            var passwordError = document.getElementById("doctorPasswordError");
            var valid = true;

            // Reset previous error messages
            usernameError.innerHTML = "";
            passwordError.innerHTML = "";

            // Validate username
            if (username.trim() === "") {
                usernameError.innerHTML = "Please enter your username";
                valid = false;
            }

            // Validate password
            if (password.trim() === "") {
                passwordError.innerHTML = "Please enter your password";
                valid = false;
            }

            return valid;
        }
    </script>
</body>
</html>