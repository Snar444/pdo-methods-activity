<?php
require_once 'dbconfig.php';

// prepared statement with a placeholder to prevent SQL injection
$stmt = $pdo->prepare("SELECT * FROM jamaica_grocery_items WHERE item_id = :id");

// input the value that the query will execute
$stmt->execute(['id' => 101]);

// retrives a single row from the result set
$item = $stmt->fetch();

echo "<pre>";
print_r($item);
echo "</pre>";



