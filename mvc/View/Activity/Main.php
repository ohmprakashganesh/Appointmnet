<div class="container mt-5">
        <h1 class="text-center mb-4">Activity Details</h1>
        <?php if (!empty($data)): ?>
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>id</th>
                        <th>type</th>
                        <th>officer id</th>
                        <th>start_date</th>
                        <th>start_time</th>
                        <th>end_date</th>
                        <th>end_time</th>
                        <th>status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $activity): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($activity['id']); ?></td>
                            <td><?php echo htmlspecialchars($activity['type']); ?></td>
                            <td><?php echo htmlspecialchars($activity['officer_id']); ?></td>

                            <td><?php echo htmlspecialchars($activity['start_date']); ?></td>
                            <td><?php echo htmlspecialchars($activity['start_time']); ?></td>

                            <td><?php echo htmlspecialchars($activity['end_date']); ?></td>
                            <td><?php echo htmlspecialchars($activity['end_time']); ?></td>

                            <td><?php echo htmlspecialchars($activity['status']); ?></td>

                            <td><button>update</button> <button>delete</button></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="alert alert-warning text-center">No posts found.</div>
        <?php endif; ?>
    </div>