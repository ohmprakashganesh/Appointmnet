<div class="container mt-5">
    <h1 class="text-center mb-4">Create Post</h1>
    <form method="POST" action="create_post.php">
        <div class="mb-3">
            <label for="name" class="form-label">Post Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter post name" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="">Select status</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
        </div>
        <div class="d-flex justify-content-between">
            <a href="posts_list.php" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </div>
    </form>
</div>

<?php 




