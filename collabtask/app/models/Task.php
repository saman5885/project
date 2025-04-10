<?php
require_once __DIR__ . '/../config/db.php';

class Task {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($data) {
        $stmt = $this->pdo->prepare("
            INSERT INTO tasks (title, description, assigned_to, created_by, project_id, status, priority, deadline)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)
        ");
        return $stmt->execute([
            $data['title'],
            $data['description'],
            $data['assigned_to'],
            $data['created_by'],
            $data['project_id'],
            $data['status'],
            $data['priority'],
            $data['deadline']
        ]);
    }

    public function getAllByProject($project_id) {
        $stmt = $this->pdo->prepare("
            SELECT t.*, u.name as assigned_name 
            FROM tasks t 
            JOIN users u ON t.assigned_to = u.id 
            WHERE project_id = ?
        ");
        $stmt->execute([$project_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM tasks WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare("
            UPDATE tasks SET title=?, description=?, assigned_to=?, status=?, priority=?, deadline=? WHERE id=?
        ");
        return $stmt->execute([
            $data['title'],
            $data['description'],
            $data['assigned_to'],
            $data['status'],
            $data['priority'],
            $data['deadline'],
            $id
        ]);
    }
}
?>
