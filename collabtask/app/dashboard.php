<?php
session_start();

// Simulate user session data
$user = [
    'name' => 'Saman Kumar',
    'role' => 'Admin',
];

// Simulated dashboard stats (replace with DB queries later)
$stats = [
    'total_projects' => 8,
    'completed_tasks' => 34,
    'pending_tasks' => 12,
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard | CollabTask</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-icon {
            font-size: 2rem;
            padding: 15px;
            border-radius: 50%;
            color: white;
        }

        .bg-gradient-blue {
            background: linear-gradient(135deg, #007bff, #0056b3);
        }

        .bg-gradient-green {
            background: linear-gradient(135deg, #28a745, #1e7e34);
        }

        .bg-gradient-orange {
            background: linear-gradient(135deg, #fd7e14, #e8590c);
        }
    </style>
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

<!-- Add Task Interface -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
          <h4 class="mb-0">Add New Task</h4>
        </div>
        <div class="card-body">
          <form action="save_task.php" method="POST">
            <div class="mb-3">
              <label for="title" class="form-label">Task Title</label>
              <input type="text" class="form-control" name="title" required placeholder="e.g. Finalize UI design">
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" name="description" rows="4" required placeholder="Describe the task..."></textarea>
            </div>

            <div class="mb-3">
              <label for="assigned_to" class="form-label">Assigned To</label>
              <input type="text" class="form-control" name="assigned_to" required placeholder="Team member's name">
            </div>

            <div class="mb-3">
              <label for="due_date" class="form-label">Due Date</label>
              <input type="date" class="form-control" name="due_date" required>
            </div>

            <div class="mb-3">
              <label for="status" class="form-label">Status</label>
              <select class="form-select" name="status" required>
                <option value="Pending" selected>Pending</option>
                <option value="In Progress">In Progress</option>
                <option value="Completed">Completed</option>
              </select>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-success">Save Task</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include 'partials/footer.php'; ?>
</body>
</html>
