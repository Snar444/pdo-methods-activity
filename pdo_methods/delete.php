<?php
require_once 'dbconfig.php';

$stmt = $pdo->prepare("DELETE FROM jamaica_grocery_items WHERE item_id = :id");

// deletes the data i inserted earlier
$stmt->execute(['id' => 101]);

echo $stmt->rowCount() . " record deleted successfully.";