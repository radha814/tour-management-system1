<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
/* styles.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

label {
    font-weight: bold;
    margin-top: 10px;
    display: block;
}

input {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="number"], input[type="text"], input[type="email"] {
    font-size: 16px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
</style>
<body>
    <div class="container">
        <h2>Payment Form</h2>
        <form id="payment-form" method="POST" action="tour_booking.php">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="card-number">Card Number:</label>
            <input type="text" id="card-number" name="card-number" maxlength="16" required>

            <label for="expiry-date">Expiry Date (MM/YY):</label>
            <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" maxlength="3" required>

            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" min="1" required>

            <button type="submit" id="submit-btn">Submit Payment</button>
        </form>
    </div>
   <script>

document.getElementById("payment-form").addEventListener("submit", function(event) {
    let valid = true;

    // Validate card number
    const cardNumber = document.getElementById("card-number").value;
    if (cardNumber.length !== 16 || isNaN(cardNumber)) {
        valid = false;
        alert("Invalid card number. Please enter a 16-digit card number.");
    }

    // Validate CVV
    const cvv = document.getElementById("cvv").value;
    if (cvv.length !== 3 || isNaN(cvv)) {
        valid = false;
        alert("Invalid CVV. Please enter a 3-digit CVV.");
    }

    // Validate expiry date (MM/YY format)
    const expiryDate = document.getElementById("expiry-date").value;
    const expiryRegex = /^(0[1-9]|1[0-2])\/[0-9]{2}$/;
    if (!expiryRegex.test(expiryDate)) {
        valid = false;
        alert("Invalid expiry date. Please use MM/YY format.");
    }

    if (!valid) {
        event.preventDefault();  // Stop form submission if validation fails
    }
});
</script>
    <script src="script.js"></script>
<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $card_number = htmlspecialchars($_POST['card-number']);
    $expiry_date = htmlspecialchars($_POST['expiry-date']);
    $cvv = htmlspecialchars($_POST['cvv']);
    $amount = htmlspecialchars($_POST['amount']);

    // Normally, you would use an API like Stripe or PayPal to process the payment here.

    // For demonstration, we'll just show the submitted data:
    echo "<h2>Payment Details</h2>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Card Number:</strong> " . $card_number . "</p>";
    echo "<p><strong>Expiry Date:</strong> " . $expiry_date . "</p>";
    echo "<p><strong>CVV:</strong> " . $cvv . "</p>";
    echo "<p><strong>Amount:</strong> $" . $amount . "</p>";
    
    
}
?>

</body>
</html>
