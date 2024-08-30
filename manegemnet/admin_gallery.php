
<div class="container">
    <h1 class="mt-5">Admin Gallery</h1>
    <form action="manegemnet/upload.php" method="post" enctype="multipart/form-data" class="mt-4">
        <h2>Upload Images</h2>
        <div class="form-group">
            <label for="image">Select Image(s)</label>
            <input type="file" name="images[]" multiple accept="image/*" class="form-control-file" id="image">
        </div>
        <div class="form-group">
            <label for="image_description">Image Title</label>
            <textarea name="image_description" class="form-control" id="image_description" rows="1"></textarea>
        </div><br><br>
        <!-- Add uploader_username as a hidden input field -->
        <input type="hidden" name="uploader_username" value="<?php echo $_SESSION['username']; ?>">
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>

