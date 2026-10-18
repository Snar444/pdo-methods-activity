<?php
require_once 'dbconfig.php';

$sql = "UPDATE jamaica_grocery_items
        SET price = :price
        WHERE item_id = :id";           // updates the price of an item
$stmt = $pdo->prepare($sql);

// change the price of item 1 (Corned Beef 340g)
$stmt->execute([
    'price' => 600.00,
    'id'    => 1,
]);

echo $stmt->rowCount() . " record updated successfully.";