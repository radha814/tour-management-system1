<?php
// Include database connection
include('dbconnection/userloginconn.php');

// Process registration
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL query with placeholders
    $query = "INSERT INTO users (username, password) VALUES (?, ?)";

    // Prepare statement
    if ($stmt = mysqli_prepare($connt, $query)) {
        // Bind parameters to the query
        mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPassword);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "User registered successfully.";
        } else {
            echo "Error during registration.";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing the query.";
    }
}
?>

<!-- Registration Form -->
<form method="post" action="user_registration.php">
    <div class="textbox">
        <input type="text" name="username" placeholder="Username" required>
    </div>
    <div class="textbox">
        <input type="password" name="password" placeholder="Password" required>
    </div>
    <button type="submit" name="register">Register</button>
</form>
