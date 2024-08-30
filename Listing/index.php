<div class="container mt-5">
    <h2 class="mb-4">Add Product</h2>
    <form action="Listing/add_product.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" class="form-control" id="product_name" name="product_name" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price"  required>
        </div>
        <div class="form-group">
            <label for="duration">Duration (in days):</label>
            <input type="number" class="form-control" id="duration" name="duration" min="1" required>
        </div>
        <div class="form-group">
            <label for="contact_number">Contact Number:</label>
            <input type="tel" class="form-control" id="contact_number" name="contact_number" pattern="[0-9]{10}" required>
            <small class="form-text text-muted">Please enter a valid 10-digit phone number.</small>
        </div>
        <div class="form-group">
            <label for="image">Upload Image:</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
