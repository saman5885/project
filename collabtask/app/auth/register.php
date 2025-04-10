<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | CollabTask</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <form method="POST" action="register.php" class="w-50 mx-auto border p-4 rounded shadow">
        <h3 class="text-center mb-4">Register on CollabTask</h3>

        <!-- Full Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" id="name" name="name" class="form-control" required />
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" name="email" class="form-control" required />
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" required />
        </div>

        <!-- Role Selection (Optional) -->
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" id="role" class="form-select" required>
                <option value="member">Member</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-success w-100">Register</button>

        <!-- Link to Login -->
        <p class="text-center mt-3">Already have an account? <a href="login.php">Login here</a></p>
    </form>
</div>
</body>
</html>
