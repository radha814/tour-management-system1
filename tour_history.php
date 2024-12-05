<?php
session_start(); // Start the session to store the new bookings

// Check if the session already contains bookings, if not, initialize it.
if (!isset($_SESSION['bookings'])) {
    $_SESSION['bookings'] = array(); // Initialize an empty array to store bookings
}

// Handle the form submission and store new booking data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect the new booking details from the form
    $new_booking = array(
        'name' => $_POST['name'],
        'tour' => $_POST['tour'],
        'date' => $_POST['date'],
        'email' => $_POST['email']
    );

    // Add the new booking to the session's bookings array
    $_SESSION['bookings'][] = $new_booking;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .section-title {
            text-align: center;
            color: #333;
            margin-top: 30px;
        }
        /* Styling for the Go to Home Page button */
        .home-btn {
            display: block;
            width: 200px;
            margin: 30px auto;
            padding: 10px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .home-btn:hover {
            background-color: #45a049;
        }
        /* Styling for the New Booking Form */
        .booking-form {
            margin-top: 30px;
        }
        input[type="text"], input[type="email"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Your Tour History</h1>

        <!-- Display the Tour Booking Form -->
        <div class="booking-form">
            <h3>Add a New Booking</h3>
            <form method="POST" action="tour_history.php">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="text" name="tour" placeholder="Tour Destination" required>
                <input type="date" name="date" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <button type="submit" class="form-button">Add Booking</button>
            </form>
        </div>

        <!-- Display Old Tour History (stored in session) -->
        <div class="section-title">
            <h2>Tour History</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Tour</th>
                    <th>Date</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop through all bookings stored in the session and display them
                if (isset($_SESSION['bookings'])) {
                    foreach ($_SESSION['bookings'] as $booking) {
                        echo "<tr>
                            <td>{$booking['name']}</td>
                            <td>{$booking['tour']}</td>
                            <td>{$booking['date']}</td>
                            <td>{$booking['email']}</td>
                        </tr>";
                    }
                }
                ?>
            </tbody>
        </table>

        
    </div>
</body>
</html>
