<?php
require_once 'dbconfig.php';

// query for grace, laso and holsum grocery items. sorted by item id
$stmt = $pdo->query("SELECT item_id, item_name, brand, category, price
                     FROM jamaica_grocery_items
                     WHERE brand IN ('Grace', 'Lasco' ,'Holsum')
                     ORDER BY item_id ASC");
$items = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Grocery Items</title>
    <style>
        table { border-collapse: collapse; width: 80%; }
        th, td { border: 1px solid #333; padding: 6px 10px; text-align: left; }
        th { background: #eee; }
    </style>
</head>
<body>
    <h2>Grace, Lasco and Holsum Brand Items</h2>
    <table>
        <tr>
            <th>ID</th><th>Item Name</th><th>Brand</th><th>Category</th><th>Price (JMD)</th>
        </tr>
        <?php foreach ($items as $row): ?>
        <tr>
            <!-- htmlspecialchars() prevents HTML/script injection from database values -->
            <td><?= htmlspecialchars($row['item_id']) ?></td>
            <td><?= htmlspecialchars($row['item_name']) ?></td>
            <td><?= htmlspecialchars($row['brand']) ?></td>
            <td><?= htmlspecialchars($row['category']) ?></td>
            <td><?= number_format($row['price'], 2) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>