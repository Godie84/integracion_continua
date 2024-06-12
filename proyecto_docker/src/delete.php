<?php
require 'db.php';

$id = $_POST['id'];

$sql = "DELETE FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

echo "Record deleted successfully";
?>
