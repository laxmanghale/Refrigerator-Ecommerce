
<?php
    include 'navbar.php';
if(isset($_SESSION['user_login']))
{ ?>
    <link rel="stylesheet" href="style.css">

<!-- Hero Section -->

<section class="hero">
    <h1>Refrigerators</h1>
    <p>Our refrigerators redefine freshness and convenience, blending state-of-the-art cooling technology with stylish designs, energy efficiency, and spacious interiors to perfectly meet the needs of modern households.</p>
</section>

<!-- Highlight Section -->
<section class="highlight">
    <div class="highlight-content">
        <h2>Keep Fresher, Cool, Faster Save More</h2>
        <p>Our Inverter Linear Compressor Keeps food at the peak of freshness with less energy consumed.</p>
        <button class="btn-buy-now" id="shop"> BUY NOW</button>
    </div>
</section>

<!-- Product Category Section -->
<section class="product-category" id="product-category">
    <h2>Our Top Rated</h2>
    <p>Discover our latest arrivals<br> innovative refrigerators with advanced features,<br> elegant designs, and unmatched performance, crafted to elevate your kitchen experience.</p>
    <button class="btn-shop-all" id="shop">Shop All</button>
    <div class="product-container">
        <div id="down" class="product-item" style="background-image: url('./pic/top door.jpg');"> Freezer Refrigerator</div>
        <div class="product-item">Door-in-Door</div>
        <div id="down" class="product-item">Side by Side Refrigerator</div>
        <div class="product-item">InstaView Door-in-Door</div>
    </div>
</section>

<script>
    // Add a click event listener to the element with id 'shop'
    document.getElementById('shop').addEventListener('click', function () {
        window.location.href = 'shop.php'; // Redirect to shop.php
    });
</script>

<!----------------product page-------------------->


<?php include 'footer.php';
}
    else{
        header('location: login.php');
    }?>
