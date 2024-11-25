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

<div class="container mt-5">
    <button onclick="setAction('create')">Create</button>
    <button onclick="setAction('post')">Post</button>
    <button onclick="setAction('officer')">Officer</button>
</div>

<?php
$action = isset($_GET['active']) ? $_GET['active'] : '';

switch ($action) {
    case 'create':
        echo '<script>alert("Create action triggered!");</script>';
        break;
    case 'post':
        echo '<script>alert("Post action triggered!");</script>';
        break;
    case 'officer':
        echo '<script>alert("Officer action triggered!");</script>';
        break;
    default:
        // Optional: No action or a default action
        echo '<script>alert("No action selected.");</script>';
        break;
}
?>

<script>
function setAction(action) {
    // Update the URL with the appropriate query parameter
    window.location.href = `?active=${action}`;
}
</script>
