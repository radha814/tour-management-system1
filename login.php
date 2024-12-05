<?php
// Include database connection and navbar
include('dbconnection/userloginconn.php');
include 'include/navbar.php';

// Start session
session_start();

if (isset($_POST['userlogin'])) {
    // Get user inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL query with placeholders to avoid SQL injection
    $query = "SELECT * FROM users WHERE username = ?";

    // Prepare statement
    if ($stmt = mysqli_prepare($connt, $query)) {
        // Bind parameters to the query
        mysqli_stmt_bind_param($stmt, "s", $username);

        // Execute the query
        mysqli_stmt_execute($stmt);

        // Get result
        $result = mysqli_stmt_get_result($stmt);

        // Check if user exists
        if (mysqli_num_rows($result) == 1) {
            // Fetch user data
            $user = mysqli_fetch_assoc($result);

            // Verify password using password_verify() for hashed passwords
            if (password_verify($password, $user['password'])) {
                // Store username in session and redirect
                $_SESSION['username'] = $username;
                header("Location: user_dashboard/dashboard.php");
                exit();
            } else {
                // Invalid password
                $error_message = "Incorrect password.";
            }
        } else {
            // User not found
            $error_message = "Incorrect username.";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Query preparation failed
        $error_message = "Error preparing the query.";
    }
}
?>

<!-- HTML Form -->
<section id="login">
    <div class="login-box">
        <h1>Login</h1>
        <nav id="main-menu">
            <ul>
                <li class="active"><a class="btn" href="login.php">User</a></li>
                <li><a class="btn" href="adminlog.php">Admin</a></li>
            </ul>
        </nav>
        <form method="post" action="login.php">
            <div class="textbox">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="textbox">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button class="btnlogin" type="submit" name="userlogin">Log In</button>
        </form>
        <?php
        // Display error message if there was an issue
        if (isset($error_message)) {
            echo "<div class='error-message'>$error_message</div>";
        }
        ?>
    </div>
</section>

<?php include 'include/footer.php'; ?>
