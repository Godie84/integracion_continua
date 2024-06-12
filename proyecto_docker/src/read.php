<?php
require 'db.php';

$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll();

foreach ($users as $user) {
    echo $user['id'] . ": " . $user['name'] . " (" . $user['email'] . ")<br>";
}
?>
