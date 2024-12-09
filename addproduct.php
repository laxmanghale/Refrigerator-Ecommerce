<!-- <?php include 'header.php'; ?> -->

<section class="add-product">
    <div class="container">
        <h2>Product Information</h2>
        <form id="add-product-form">
            <!-- Image Upload Section -->
            <div class="image-upload">
                <label>Image</label>
                <div class="image-preview">
                    <div class="image-placeholder">+</div>
                    <div class="image-placeholder"></div>
                    <div class="image-placeholder"></div>
                    <div class="image-placeholder"></div>
                    <div class="image-placeholder"></div>
                </div>
            </div>

            <!-- Product Fields -->
            <div class="form-group">
                <label for="product-name">Name</label>
                <input type="text" id="product-name" name="name" placeholder="Enter product name" required>
            </div>

            <div class="form-group">
                <label for="product-description">Description</label>
                <textarea id="product-description" name="description" placeholder="Enter product description" rows="4" required></textarea>
            </div>

            <div class="form-group-inline">
                <div class="form-group">
                    <label for="product-price">Price</label>
                    <input type="number" id="product-price" name="price" placeholder="Enter price" required>
                </div>
                <div class="form-group">
                    <label for="product-quantity">Quantity</label>
                    <input type="number" id="product-quantity" name="quantity" placeholder="Enter quantity" required>
                </div>
            </div>

            <div class="form-group">
                <label for="product-category">Category</label>
                <select id="product-category" name="category" multiple>
                    <option value="refrigerator">Refrigerator</option>
                    <option value="microwave">Microwave</option>
                    <option value="washer">Washing Machine</option>
                    <option value="dryer">Dryer</option>
                    <option value="oven">Oven</option>
                </select>
            </div>
        </form>
    </div>
        <button type="submit" class="btn-submit">Add Product</button>
    </form>
</section>

<!--  