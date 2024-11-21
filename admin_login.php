<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="Styles.css">
</head>
<body>
    <div id="adminLogin">
        <h2>Admin Login</h2>
        <form id="adminLoginForm" onsubmit="return validateForm()" action="admin.php" method="POST">
            <div class="form-group">
                <label for="adminUsername">Username:</label>
                <input type="text" id="adminUsername" name="adminUsername">
                <div id="adminUsernameError" class="error-message"></div>
            </div>
            <div class="form-group">
                <label for="adminPassword">Password:</label>
                <input type="password" id="adminPassword" name="adminPassword">
                <div id="adminPasswordError" class="error-message"></div>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        function validateForm() {
            var username = document.getElementById('adminUsername').value;
            var password = document.getElementById('adminPassword').value;
            var usernameError = document.getElementById('adminUsernameError');
            var passwordError = document.getElementById('adminPasswordError');
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