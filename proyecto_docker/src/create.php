<?php
require 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, email) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email]);

echo "New record created successfully";
?>
