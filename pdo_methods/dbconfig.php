<?php
// database connection using PDO

$host    = 'localhost';             // server name
$db      = 'sagang';                // database name
$user    = 'root';                  // default username
$pass    = '';                      // default password (empty)
$charset = 'utf8mb4';               // character set

// tells PDO which driver, host and database to use
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// PDO options
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,  
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,        
    PDO::ATTR_EMULATE_PREPARES   => false,                   
];

try {
    // create connection
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    // stop and show the error if the connection fails
    die('Connection failed: ' . $e->getMessage());
}
