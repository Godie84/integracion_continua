<?php
require 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "UPDATE users SET name = ?, email = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $id]);

echo "Record updated successfully";
?>
