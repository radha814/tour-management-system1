
<?php
session_start(); // Start session to handle success message
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $name = $_POST['Name'];
    $cardNumber = $_POST['Card Number'];
    $expiryDate = $_POST['Expiry-Date'];
    $cvv = $_POST['CVV'];
    $paymentType = $_POST['Payment Type'];
    $cost = $_POST['t_cost'];

    // Validation logic (just a simple check for the sake of example)
    if (empty($name) || empty($cardNumber) || empty($cvv) || empty($expiryDate) || empty($paymentType) || empty($cost)) {
        $_SESSION['success_message'] = 'All fields are required!';
        header('Location: payment.php'); // Redirect back to the form with error
        exit();
    }
    
    // You would now process the payment with the payment gateway here...
    // For example, you can integrate Stripe, PayPal, etc.
    
    // Example: Assuming payment is successful, you would store booking info
    // Save to a database (pseudo code)
    // $query = "INSERT INTO bookings (name, card_number, expiry_date, cvv, payment_type, cost) VALUES ('$name', '$cardNumber', '$expiryDate', '$cvv', '$paymentType', '$cost')";
    // Execute query...
    
    // Assume booking is successful, generate confirmation code
    $confirmationCode = uniqid('BOOK_', true); // Generate a unique booking ID
    
    // Store confirmation message in session
    $_SESSION['success_message'] = "Your booking was successful! Your confirmation code is: " . $confirmationCode;
    
    // Redirect to confirmation page
    header('Location: confirmation.php');
    exit();
}
?>


