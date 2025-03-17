<?php
// Start the session only if it hasn't been started yet


// Define database connection parameters only if they are not already defined
if (!defined('DB_HOST')) {
    define('DB_HOST', 'localhost');
}

if (!defined('DB_USER')) {
    define('DB_USER', 'root');
}

if (!defined('DB_PASS')) {
    define('DB_PASS', '');
}

if (!defined('DB_NAME')) {
    define('DB_NAME', 'booky');
}

// Enable error reporting for MySQLi to catch issues
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Establish a connection to the MySQL database
    $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Set the charset to avoid potential encoding issues
    $con->set_charset("utf8");

} catch (mysqli_sql_exception $e) {
    // Log the error for debugging (optional)
    error_log("Database connection error: " . $e->getMessage());

    // Redirect to the error page
    header("Location: error.php");
    exit();
}
?>
