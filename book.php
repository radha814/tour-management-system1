<!-- tour_booking.php -->
<?php
// Initialize variables to avoid undefined index notices
$name = $tour = $date = $email = '';
$confirmation_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collecting form data
    if (isset($_POST['name'], $_POST['tour'], $_POST['date'], $_POST['email'])) {
        $name = $_POST['name'];
        $tour = $_POST['tour'];
        $date = $_POST['date'];
        $email = $_POST['email'];

        // You can save the data to a database here if needed.
        // For now, we'll just show a confirmation message.

        $confirmation_message = "Booking Confirmed! <br> Name: $name <br> Tour: $tour <br> Date: $date <br> Email: $email";
    } else {
        $confirmation_message = "Some fields are missing. Please fill out all fields.";
    }
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
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #45a049;
        }
        .confirmation {
            background-color: #e0f7fa;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tour Booking</h1>
       <form id="payment-form" method="POST" action="payment.php">
        <form method="POST" action="">
            <label for="name">Your Name</label>
            <input type="text" name="name" required value="<?php echo htmlspecialchars($name); ?>">

           <label for="email">Your Email</label>
            <input type="email" name="email" required value="<?php echo htmlspecialchars($email); ?>">

<div class="inputBox">
            <span>Phone </span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            
<span>Address </span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
            
         <label for="tour">Choose Tour</label>
            <select name="tour" required>
<option value="Select" <?php if ($tour == 'Select') echo 'selected'; ?>>Select</option>
                <option value="Mumbai" <?php if ($tour == 'Mumbai') echo 'selected'; ?>>Mumbai</option>
                <option value="Paris" <?php if ($tour == 'Paris') echo 'selected'; ?>>Paris</option>
                <option value="France" <?php if ($tour == 'France') echo 'selected'; ?>>France</option>
                <option value="Haridwar" <?php if ($tour == 'Haridwar') echo 'selected'; ?>>Haridwar</option>
                <option value="Jaipur" <?php if ($tour == 'Jaipur') echo 'selected'; ?>>Jaipur</option>
                <option value="Vrindavan" <?php if ($tour == 'Vrindavan') echo 'selected'; ?>>Vrindavan</option>
                <option value="Europe" <?php if ($tour == 'Europe') echo 'selected'; ?>>Europe</option>
                <option value="Amritsar" <?php if ($tour == 'Amritsar') echo 'selected'; ?>>Amritsar</option>
                <option value="Singapour" <?php if ($tour == 'Singapour') echo 'selected'; ?>>Singapour</option>
                 
                <option value="Kashmir" <?php if ($tour == 'Kashmir') echo 'selected'; ?>>Kashmir</option>
              
                <option value="Thailand" <?php if ($tour == 'Thailand') echo 'selected'; ?>>Thailand</option>
                <option value="Kerala" <?php if ($tour == 'Kerala') echo 'selected'; ?>>Kerala</option>
                <option value="Greece" <?php if ($tour == 'Greece') echo 'selected'; ?>>Greece</option>
                
                <option value="Australia" <?php if ($tour == 'Australia') echo 'selected'; ?>>Australia</option>
            </select>

         <div class="inputBox">
            <span>How Many </span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>Arrivals </span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>Leaving </span>
            <input type="date" name="leaving">
         </div>

            <button type="submit" class="button">Confirm Booking</button>
        </form>
