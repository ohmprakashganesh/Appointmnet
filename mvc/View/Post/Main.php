

   


    <div class="container mt-5">
        <h1 class="text-center mb-4">Posts Details</h1>
        <?php if (!empty($posts)): ?>
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($posts as $post): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($post['id']); ?></td>
                            <td><?php echo htmlspecialchars($post['name']); ?></td>
                            <td><?php echo htmlspecialchars($post['status']); ?></td>
                            <td><button>update</button> <button>delete</button></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="alert alert-warning text-center">No posts found.</div>
        <?php endif; ?>
    </div>
    <a href="" class="btn btn-primary">Create Post</a>

 