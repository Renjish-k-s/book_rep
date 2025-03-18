<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define database connection parameters
define('DB_HOST', 'booky-server.mysql.database.azure.com'); // Check correct Azure hostname
define('DB_USER', 'renjishksimon');
define('DB_PASS', 'ram@1234$');
define('DB_NAME', 'booky');
define('DB_PORT', 3306); // Azure default MySQL port

// Enable MySQLi error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Connect with SSL (Azure requires SSL connections)
    $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT, '/ssl/DigiCertGlobalRootCA.crt.pem');

    // Set UTF-8 encoding
    $con->set_charset("utf8");

    // Check if the connection is successful
    if ($con->ping()) {
        // Remove this in production, used only for debugging
        echo "✅ Database connected successfully!";
    }

} catch (mysqli_sql_exception $e) {
    // Display error message (Use only during debugging)
    die("❌ Database connection error: " . $e->getMessage());
}
?>
