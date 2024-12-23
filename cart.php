<?php
include "navbar.php";
?>
<!-- shopping-cart.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>

    <div class="container">
        <h1 class="title">Your cart</h1>
        <p class="subtitle">Not ready to checkout? <a href="shop.php" style="text-decoration: underline;">Continue Shopping</a></p>

    <!-- Cart Item -->
    <div class="cart-item">
        <img src="./pic/whirpool185.jpg">
    <div class="cart-item-details">
            <h2 class="cart-item-title">Whirlpool Icemagic 185 Litres Single Door Refrigerator 
            ( 200 IMPC Prm Sapphire Linnea)</h2>
            <p class="cart-item-vendor">Vendor: Cannon Appliance</p>
            <a href="#" class="cart-item-remove">Remove</a>
    </div>
    <div class="unit-pr">
        <h3>Unit Price</h3>
        <p class="cart-item-price"> Rs 30,000</p>
    </div>
        <div class="cart-item-quantity">
            <div class="quantity-container">
                <button class="quantity-button">-</button>
                <input type="number" class="quantity-input" value="1" min="1">
                <button class="quantity-button">+</button>
            </div>
        </div>
            <div class="total-price">
                <h3>Total Price</h3>
                <p class="cart-item-price"> Rs 30,000</p>
            </div>
    </div>

    <div class="cart-item">
        <img src="./pic/samsung700L.webp" alt="Product Image">
        <div class="cart-item-details">
            <h2 class="cart-item-title">SAMSUNG RS72R5011SL - 700 Litres Inverter Side By Side 
            Refrigerator With SpaceMax Technology</h2>
            <p class="cart-item-vendor">Vendor: Cannon Appliance</p>
            <a href="#" class="cart-item-remove">Remove</a>
        </div>
        <div class="unit-price">
            <h3>Unit Price</h3>
            <p class="cart-item-price"> Rs 300,000</p>
        </div>
        <div class="cart-item-quantity">
        <div class="quantity-container">
            <button class="quantity-button">-</button>
            <input type="number" class="quantity-input" value="1" min="1">
            <button class="quantity-button">+</button>
        </div>
        </div>
        <div class="total-price">
            <h3>Total Price</h3>
            <p class="cart-item-price"> Rs 30,000</p>
        </div>
    </div>


    <div class="coupon-container">
        <input type="text" class="coupon-input" placeholder="Enter coupon code here">
    </div>

  
    <div class="bottomactions">
        <div class="actions">
            <button class="button" id="continue-shopping">Continue Shopping</button>
            <button class="button" id="clear-cart">Clear Cart</button>
        </div>
        <div class="proceedcheckout">
            <button class="button primary" id="proceed-checkout">Proceed to Checkout</button>
        </div>
        </div>
    </div>
</body>
<script>
    document.getElementById('continue-shopping').addEventListener('click', function() {
        window.location.href = 'shop.php';
    });
    document.getElementById('proceed-checkout').addEventListener('click', function() {
        window.location.href = 'checkout.php';
    });
</script>
</html>
