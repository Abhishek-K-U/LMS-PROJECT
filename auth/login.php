<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - LMS</title>
    <link rel="stylesheet" href="/BROPHP/assets/css/style.css">
</head>
<body>
<?php include '../includes/header.php'; ?>
    <h2>Login</h2>
    <form action="process_login.php" method="post">
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Login as:</label><br>
        <select name="role" required>
            <option value="">-- Select Role --</option>
            <option value="student">Student</option>
            <option value="instructor">Instructor</option>
        </select><br><br>

        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="signup.php">Signup here</a></p>
</body>
</html>
