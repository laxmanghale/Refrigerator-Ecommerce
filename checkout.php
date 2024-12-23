<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="checkout.css">
</head>
<body>
    <div class="container">
        <div class="checkout-form">
            <h1>Checkout</h1>

            <div class="section">
                <div class="sectionone">
                    <h2>Address ----- Payment</h2>
                    <!-- Add payment form fields here -->
                </div>
                <div class="username">
                <label for="firstName"></label>
                    <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
                <label for="lastName"></label>
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
            </div>

        <div class="form-group">
            <label for="address"></label>
            <input type="text" id="address" name="address" placeholder="Address" required>
        </div>
        <div class="form-group">
            <label for="city"></label>
            <input type="text" id="city" name="city" placeholder="City" required>
        </div>
        <div class="form-group">
            <label for="country"></label>
            <select id="country" name="country" required>
                <option value="">Select Country</option>
                <option value="usa">USA</option>
                <option value="canada">Canada</option>
                <option value="uk">United Kingdom</option>
                <option value="uk">Nepal</option>
            </select>
        </div>
        <div class="form-group">
            <label for="zipcode"></label>
            <input type="text" id="zipcode" name="zipcode" placeholder="Zipcode" required>
        </div>
        <div class="form-group">
            <label for="phone"></label>
            <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>
        </div>
        </div>

        

            <button type="submit" class="btn">Place Order</button>
        </div>

    
    </div>
</body>
</html>
