<div class="container mt-5">
        <h2>Edit User</h2>
        <form action="manegemnet/process_edit_user.php" method="post">
            <div class="form-group">
                <label for="user_id">User ID:</label>
                <input type="text" class="form-control" id="user_id" name="user_id" required>
            </div>
            <div class="form-group">
                <label for="username">New Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="room_no">Room No:</label>
                <input type="text" class="form-control" id="room_no" name="room_no" required>
            </div>
            <div class="form-group">
                <label for="wing">Wing:</label>
                <input type="text" class="form-control" id="wing" name="wing" required>
            </div>
            <div class="form-group">
                <label for="phone_no">Phone No:</label>
                <input type="text" class="form-control" id="phone_no" name="phone_no" required>
            </div>
            <div class="form-group">
                <label for="role">New Role:</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
    </div>