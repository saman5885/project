
    <?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CollabTask | Team Collaboration & Task Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('assets/images/bg.jpg') center/cover no-repeat;
      color: white;
      padding: 100px 0;
    }
  </style>
</head>
<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">CollabTask</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-outline-light btn-sm ms-2" href="auth/login.php">Login</a>
        </li>
        <!-- Register Button -->
        <li class="nav-item">
          <a class="btn btn-outline-light btn-sm ms-2" href="register.php">Register Now</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <!-- Hero Section -->
  <section class="hero text-center d-flex align-items-center justify-content-center">
    <div class="container">
      <h1 class="display-4 fw-bold">Welcome to CollabTask</h1>
      <p class="lead">Your all-in-one solution for project collaboration and task management.</p>
      <a href="dashboard.php" class="btn btn-primary btn-lg mt-3">Get Started</a>

    </div>
  </section>

  <!-- Features Section -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4">
          <h5 class="fw-bold">🧑‍🤝‍🧑 Team Collaboration</h5>
          <p>Create teams, assign roles, and collaborate in real-time on tasks and projects.</p>
        </div>
        <div class="col-md-4">
          <h5 class="fw-bold">🗂️ Task Management</h5>
          <p>Track tasks, update statuses, and monitor progress with detailed views.</p>
        </div>
        <div class="col-md-4">
          <h5 class="fw-bold">📊 Dashboard Insights</h5>
          <p>View project stats, task deadlines, and user activity in one central place.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'partials/footer.php'; ?>
</body>
</html>
