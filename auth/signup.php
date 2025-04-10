<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup - LMS</title>
    <link rel="stylesheet" href="/BROPHP/assets/css/style.css">
</head>
<body>
<?php include '../includes/header.php'; ?>
    <h2>Signup</h2>
    <form action="process_signup.php" method="post">
        <label>Full Name:</label><br>
        <input type="text" name="fullname" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Role:</label><br>
        <select name="role" required>
            <option value="">-- Select Role --</option>
            <option value="student">Student</option>
            <option value="instructor">Instructor</option>
        </select><br><br>

        <button type="submit">Signup</button>
    </form>

    <p>Already have an account? <a href="login.php">Login here</a></p>
</body>
</html>
