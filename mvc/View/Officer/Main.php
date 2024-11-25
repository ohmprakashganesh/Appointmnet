<div class="container mt-5">
        <h1 class="text-center mb-4">Officer Details</h1>
        <?php if (!empty($data)): ?>
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>post_id</th>
                        <th>work-start-time</th>
                        <th>work-end time</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $post): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($post['id']); ?></td>
                            <td><?php echo htmlspecialchars($post['name']); ?></td>
                            <td><?php echo htmlspecialchars($post['post_id']); ?></td>
                            <td><?php echo htmlspecialchars($post['work_start_time']); ?></td>
                            <td><?php echo htmlspecialchars($post['work_end_time']); ?></td>

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