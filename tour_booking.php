<?php
session_start(); // Start the session to track user login status (if applicable)

// Initialize the confirmation message
$confirmation_message = '';

// Handle the form submission for booking
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if 'tour' and other necessary fields are set in POST
    if (isset($_POST['tour']) && $_POST['tour'] != 'Select') {
        $tour = $_POST['tour'];

        // Create a confirmation message
        $confirmation_message = "Tour Booking Confirmed! You have successfully booked the '$tour'.";
    } else {
        $confirmation_message = "No tour selected. Please choose a tour.";
    }
}

// Handle the logout action
if (isset($_POST['logout'])) {
    // Destroy the session and redirect to home page
    session_destroy();  // Destroy the session to log out
    header("Location: index.php");  // Redirect to the home page (or your desired page)
    exit();  // Stop the script after the redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .confirmation {
            background-color: #e0f7fa;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            margin-top: 20px;
        }
        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 20px auto;
        }
        .button:hover {
            background-color: #45a049;
        }
        .logout-btn {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 20px auto;
            text-align: center;
        }
        .logout-btn:hover {
            background-color: #e53935;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tour Booking Confirmation</h1>

        <!-- Booking Form -->
        <form method="POST" action="">
            <label for="tour">Choose Tour</label>
            <select name="tour" required>
                <option value="Select">Select</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Paris">Paris</option>
                <option value="France">France</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Thailand">Thailand</option>
                <option value="Australia">Australia</option>
                <option value="Greece">Greece</option>
                <option value="Haridwar">Haridwar</option>
                <option value="Kashmir">Kashmir</option>
                <option value="Vrindavan">Vrindavan</option>
                <option value="Europe">Europe</option>
                <option value="Singapore">Singapore</option>
                <option value="Kerala">Kerala</option>
            </select>

            <button type="submit" class="button">Confirm Booking</button>
        </form>

        <!-- Display Confirmation Message -->
        <?php if ($confirmation_message != '') : ?>
            <div class="confirmation">
                <h2><?php echo $confirmation_message; ?></h2>
            </div>
        <?php endif; ?>

        <!-- Logout Button -->
        <form method="POST" action="">
            <button type="submit" name="logout" class="logout-btn">Logout</button>
        </form>
    </div>
</body>
</html>
