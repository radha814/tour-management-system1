<?php
session_start();

// Assuming that the payment was successful, you will need some logic here to insert the booking data into your database.
if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) {
    $message = $_SESSION['success_message'];
    unset($_SESSION['success_message']);
} else {
    // Redirect back to booking page if there is no success message.
    header("Location: confirmation.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tour Booking Confirmation - RS Travels LTD</title>
    <link rel="icon" href="your-icon-link-here">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <!-- Include your header code here -->
    </header>
    
    <main>
        <section class="confirmation">
            <h1>Booking Confirmation</h1>
            <p style="font-size: 20px; color: green;"><?php echo $message; ?></p>
            <p>Thank you for booking with RS Travels LTD. You will receive an email confirmation shortly. You can view your tour details below or on your account page.</p>
            <a href="tourhistory.php" class="btn">View Booking History</a>
        </section>
    </main>

    <footer>
        <?php include 'include/footer.php';?>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
