<?php
require_once 'dbconfig.php';

// placeholders again to avoid sql injection
$sql = "INSERT INTO jamaica_grocery_items (item_id, item_name, brand, category, price)
        VALUES (:item_id, :item_name, :brand, :category, :price)";
$stmt = $pdo->prepare($sql);

// execute the new record
$stmt->execute([
    'item_id'   => 101,
    'item_name' => 'Cassava Bammy',
    'brand'     => 'Grace',
    'category'  => 'Bakery',
    'price'     => 220.00,
]);

// tells how many rows were affected
echo $stmt->rowCount() . " record inserted successfully.";