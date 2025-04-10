<?php
session_start();
require_once 'config/db.php'; // your DB connection file

// Fetch all tasks
$stmt = $pdo->query("SELECT * FROM tasks ORDER BY due_date ASC");
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Task List | CollabTask</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php">CollabTask</a>
    <div class="ms-auto">
      <a href="add_task.php" class="btn btn-success btn-sm">+ Add Task</a>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">All Tasks</h4>
    </div>
    <div class="card-body">
      <?php if (count($tasks) > 0): ?>
      <table class="table table-striped table-hover">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Task Title</th>
            <th>Status</th>
            <th>Assigned To</th>
            <th>Due Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($tasks as $index => $task): ?>
          <tr>
            <td><?= $index + 1 ?></td>
            <td><?= htmlspecialchars($task['title']) ?></td>
            <td>
              <span class="badge bg-<?= 
                $task['status'] == 'Completed' ? 'success' : 
                ($task['status'] == 'In Progress' ? 'warning' : 'secondary') ?>">
                <?= $task['status'] ?>
              </span>
            </td>
            <td><?= htmlspecialchars($task['assigned_to']) ?></td>
            <td><?= htmlspecialchars($task['due_date']) ?></td>
            <td>
              <a href="edit.php?id=<?= $task['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
              <a href="delete.php?id=<?= $task['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this task?');">Remove</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php else: ?>
        <p class="text-muted">No tasks found. <a href="add_task.php">Create one now</a>.</p>
      <?php endif; ?>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include 'partials/footer.php'; ?>
</body>
</html>

</table>
