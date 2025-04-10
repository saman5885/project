<?php
require_once '../models/Task.php';
require_once '../includes/session.php';

$task = new Task($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'assigned_to' => $_POST['assigned_to'],
        'created_by' => $_SESSION['user']['id'],
        'project_id' => $_POST['project_id'],
        'status' => $_POST['status'],
        'priority' => $_POST['priority'],
        'deadline' => $_POST['deadline'],
    ];
    $task->create($data);
    header("Location: list.php?project_id=" . $_POST['project_id']);
    exit;
}
?>

<!-- Task Create Form -->
<form method="POST">
    <input name="title" placeholder="Task Title" required>
    <textarea name="description" placeholder="Description"></textarea>
    <input name="assigned_to" type="number" placeholder="Assigned User ID" required>
    <input name="project_id" type="number" placeholder="Project ID" required>
    <select name="status">
        <option>To Do</option>
        <option>In Progress</option>
        <option>Done</option>
    </select>
    <select name="priority">
        <option>Low</option>
        <option selected>Medium</option>
        <option>High</option>
    </select>
    <input name="deadline" type="date" required>
    <button type="submit">Create Task</button>
</form>
