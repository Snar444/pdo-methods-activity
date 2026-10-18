<?php
require_once 'dbconfig.php';           

// query
$stmt = $pdo->query("SELECT * FROM jamaica_grocery_items");

// fetchAll() 
$items = $stmt->fetchAll();

// <pre> keeps print_r() output readable 
echo "<pre>";
print_r($items);
echo "</pre>";
