<?php


// Database credentials
const DB_HOST = 'localhost';
const DB_NAME = 'organica';
const DB_USER = 'root';
const DB_PASS = 'saikat@931';

// PDO options for secure, performant database interaction
$pdoOptions = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,     // Throw exceptions on errors
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,           // Fetch associative arrays
    PDO::ATTR_EMULATE_PREPARES   => false,                      // Disable emulation for prepared statements
];

// Data Source Name (DSN)
$dsn = sprintf(
    'mysql:host=%s;dbname=%s;charset=%s',
    DB_HOST,
    DB_NAME,
    'utf8mb4'
);

try {
    // Create a PDO instance (connect to the database)
    $conn = new PDO($dsn, DB_USER, DB_PASS, $pdoOptions);
    // echo " hello user Connection successful!";
} catch (PDOException $e) {
    // Handle connection errors (in production, log this instead of displaying)
    die('Database connection failed: ' . $e->getMessage());
}
?>
