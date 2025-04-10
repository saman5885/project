<?php
session_start();

// Simulated task data (replace with DB fetch)
$task_id = $_GET['id'] ?? 1;
$task = [
  'title' => 'Design project layout',
  'status' => 'Completed',
  'assigned_to' => 'Ravi',
  'due_date' => '2025-04-06',
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Task | CollabTask</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php">CollabTask</a>
    <div class="ms-auto">
      <a href="dashboard.php" class="btn btn-outline-light btn-sm">Back to Dashboard</a>
    </div>
  </div>
</nav>

<!-- Edit Task Form -->
<div class="container mt-5">
  <div class="card shadow p-4">
    <h3 class="mb-4">Edit Task</h3>
    <form method="POST" action="update_task.php">
      <input type="hidden" name="task_id" value="<?= $task_id ?>">

      <div class="mb-3">
        <label class="form-label">Task Title</label>
        <input type="text" name="title" class="form-control" value="<?= $task['title'] ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select">
          <option <?= $task['status'] === 'Pending' ? 'selected' : '' ?>>Pending</option>
          <option <?= $task['status'] === 'In Progress' ? 'selected' : '' ?>>In Progress</option>
          <option <?= $task['status'] === 'Completed' ? 'selected' : '' ?>>Completed</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Assigned To</label>
        <input type="text" name="assigned_to" class="form-control" value="<?= $task['assigned_to'] ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Due Date</label>
        <input type="date" name="due_date" class="form-control" value="<?= $task['due_date'] ?>" required>
      </div>

      <button type="submit" class="btn btn-success">Update Task</button>
    </form>
  </div>
</div>

<!-- Footer -->
<?php include 'partials/footer.php'; ?>
</body>
</html>
