<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <link rel="stylesheet" href="shop.css">
</head>
<body>
    <div class="container">
        <div class="filters">
            <h2>Filters</h2>
            <button class="clear-filters">Clear filters</button>
            
            <div class="filter-category">
                <h3>Type</h3>
                <ul>
                    <li>
                        <input type="checkbox" id="side-by-side" name="type" value="side-by-side">
                        <label for="side-by-side">Side by Side Refrigerators</label>
                    </li>
                    <li>
                        <input type="checkbox" id="one-door" name="type" value="one-door">
                        <label for="one-door">One Door Fridges </label>
                    </li>
                    <li>
                        <input type="checkbox" id="instaview" name="type" value="instaview">
                        <label for="instaview">InstaView™ Door-in-Door®</label>
                    </li>
                    <li>
                        <input type="checkbox" id="door-in-door" name="type" value="door-in-door">
                        <label for="door-in-door">Door-in-Door®</label>
                    </li>
                    <li>
                        <input type="checkbox" id="multi-door" name="type" value="multi-door">
                        <label for="multi-door">Multi Door Refrigerator</label>
                    </li>
                    <li>
                        <input type="checkbox" id="double-door" name="type" value="double-door">
                        <label for="double-door">Double Door Refrigerator</label>
                    </li>
                </ul>
            </div>

            <div class="filter-category">
                <h3>Features</h3>
                <ul>
                    <li>
                        <input type="checkbox" id="hygiene-fresh" name="features" value="hygiene-fresh">
                        <label for="hygiene-fresh">Hygiene Fresh</label>
                    </li>
                    <li>
                        <input type="checkbox" id="ice-water" name="features" value="ice-water">
                        <label for="ice-water">Ice & Water Dispenser</label>
                    </li>
                    <li>
                        <input type="checkbox" id="instaview-door" name="features" value="instaview-door">
                        <label for="instaview-door">InstaView™ Door-in-Door®</label>
                    </li>
                    <li>
                        <input type="checkbox" id="door-cooling" name="features" value="door-cooling">
                        <label for="door-cooling">Door Cooling+</label>
                    </li>
                    <li>
                        <input type="checkbox" id="smart-diagnosis" name="features" value="smart-diagnosis">
                        <label for="smart-diagnosis">Smart Diagnosis™</label>
                    </li>
                </ul>
            </div>

            <div class="filter-category">
                <h3>Smart Technology</h3>
                <ul>
                    <li>
                        <input type="checkbox" id="thinq" name="smart-tech" value="thinq">
                        <label for="thinq">ThinQ(Wi-Fi)</label>
                    </li>
                </ul>
            </div>

            <div class="filter-category">
                <h3>Capacity</h3>
                <ul>
                    <li>
                        <input type="checkbox" id="600l-more" name="capacity" value="600l-more">
                        <label for="600l-more">600L or more</label>
                    </li>
                    <li>
                        <input type="checkbox" id="400-600l" name="capacity" value="400-600">
                        <label for="400-600l">400-600L</label>
                    </li>
                </ul>
            </div>
        </div>

        <div class="product-grid">
            <div class="product-card">
                <img src="./pic/674l.jpg" alt="674L Side by Side Fridge with InstaView Door-in-Door™ in Matt Black">
                <h3>674L Side by Side Fridge with InstaView Door-in-Door™ in Matt Black</h3>
                <p>RS 200,000</p>
                <button id="cart">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="./pic/617l.jpg" alt="617L side-by-side-fridge with InstaView Door-in-Door™ in New Noble Steel">
                <h3>617L side-by-side-fridge with InstaView Door-in-Door™ in New Noble Steel</h3>
                <p>RS 352,000</p>
                <button>Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="./pic/694L.jpg" alt="694L side-by-side-fridge with Linear Compressor in Platinum Silver">
                <h3>694L side-by-side-fridge with Linear Compressor in Platinum Silver</h3>
                <p>RS 211,000</p>
                <button>Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="./pic/185L.jpg" alt="185 L, Fastest In Ice Making">
                <h3>185 L, Fastest In Ice Making</h3>
                <p>RS 200,000</p>
                <button>Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="./pic/LG 185L.jpg" alt="LG 185L One Door Fridges with Ice Making">
                <h3>LG 185L One Door Fridges with Ice Making</h3>
                <p>RS 352,000</p>
                <button>Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="./pic/506L.jpg" alt="506L Top Freezer with Inverter Linear Compressor in Platinum Silver">
                <h3>506L Top Freezer with Inverter Linear Compressor in Platinum Silver</h3>
                <p>RS 211,000</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>
</body>
<script>
    // Add a click event listener to the element with id 'shop'
    document.getElementById('cart') {
        alert('added to cart'); // Redirect to shop.php
    };
</script>
</html>

<?php include 'footer.php'; ?>
