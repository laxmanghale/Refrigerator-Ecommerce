<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="productdetails.css">
</head>
<body>
    <main class="main-container">
        <div class="product">
            <div class="image-gallery">
                <div class="thumbnail selected"><img src="./pic/thumbnai14_files/S0a04ab259ed14e688b91b4f124450a6cl.jpg_2200x2200q80.jpg_.webp"></div>
                <div class="thumbnail"><img src="./pic/thumbnai12.webp"></div>
                <div class="thumbnail"><img src="./pic/samsung700L.jpg"></div>
                <div class="thumbnail"><img src="./pic/thumbnail12.jpg"></div>
            </div>
            <div class="main-image"><img src="./pic/thumbnai14_files/S0a04ab259ed14e688b91b4f124450a6cl.jpg_2200x2200q80.jpg_.webp"></div>
            <div class="details">
                <p><strong>Brand:</strong> SAMSUNG</p>
                <p><strong>Availability:</strong> Only 2 in Stock</p>
                <h1>SAMSUNG RS72R5011SL - 700 LITRES INVERTER SIDE BY SIDE REFRIGERATOR</h1>
                <ul class="features">
                    <li>LinearCooling™</li>
                    <li>DoorCooling+™</li>
                    <li>UltraSleek Door</li>
                    <li>Large Capacity</li>
                    <li>Smart Inverter Compressor™</li>
                </ul>
                <p class="price">
                    <span class="current-price">RS 213,000</span>
                    <span class="old-price">RS 230,000</span>
                </p>
                <div class="actions">
                    <input type="number" value="1" class="quantity">
                    <button class="buy-now">Buy Now</button>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="tabs">
            <button class="tab active" data-tab="description">Description</button>
            <button class="tab" data-tab="specification">Specification</button>
            <button class="tab" data-tab="reviews">Reviews</button>
        </div>
        <div class="tab-content">
            <div class="tab-panel" id="description">
                <p>Model - RS72R5011SL 700 Litres Capacity Stainless Steel Color SpaceMax™ Technology Sleek & Seamless Design All-around Cooling Digital Inverter Technology Item Weight: 101 kg Item Dimensions - 175 × 91 × 178 cm</p>
            </div>
            <div class="tab-panel hidden" id="specification">
                <p>Specifications: <br> Energy Rating: 5 Star <br> Power Consumption: 200W <br> Cooling Technology: SpaceMax™</p>
            </div>
            <div class="tab-panel hidden" id="reviews">
                <p>Customer Reviews: <br> 1. Excellent product! - 5/5 <br> 2. Value for money - 4/5</p>
            </div>
        </div>
    </main>
    <script src="productdetails.js"></script>
</body>
</html>
<?php include 'footer.php'?>