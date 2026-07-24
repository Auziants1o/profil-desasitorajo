<?php
// TEMPORARY DIAGNOSTIC - REMOVE AFTER FIX
header('Content-Type: text/plain');
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "=== PHP Diagnostics ===\n";
echo "PHP Version: " . PHP_VERSION . "\n";
echo "Extensions: pdo=" . (extension_loaded('pdo') ? 'YES' : 'NO') . ", pdo_mysql=" . (extension_loaded('pdo_mysql') ? 'YES' : 'NO') . "\n\n";

echo "=== Environment Variables ===\n";
$vars = ['APP_KEY', 'APP_ENV', 'DB_HOST', 'DB_PORT', 'DB_DATABASE', 'DB_USERNAME', 'LARAVEL_STORAGE_PATH'];
foreach ($vars as $v) {
    $val = $_ENV[$v] ?? getenv($v) ?: '(NOT SET)';
    if ($v === 'APP_KEY' || $v === 'DB_PASSWORD') $val = substr($val, 0, 10) . '...';
    echo "$v = $val\n";
}

echo "\n=== Database Connection Test ===\n";
$host = $_ENV['DB_HOST'] ?? getenv('DB_HOST') ?: '127.0.0.1';
$port = $_ENV['DB_PORT'] ?? getenv('DB_PORT') ?: '3306';
$dbname = $_ENV['DB_DATABASE'] ?? getenv('DB_DATABASE') ?: 'defaultdb';
$user = $_ENV['DB_USERNAME'] ?? getenv('DB_USERNAME') ?: 'avnadmin';
$pass = $_ENV['DB_PASSWORD'] ?? getenv('DB_PASSWORD') ?: '';

try {
    $dsn = "mysql:host={$host};port={$port};dbname={$dbname}";
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
        PDO::ATTR_TIMEOUT => 10,
    ]);
    echo "DB Connection: SUCCESS\n";
    $stmt = $pdo->query("SELECT COUNT(*) FROM users");
    echo "Users count: " . $stmt->fetchColumn() . "\n";
} catch (PDOException $e) {
    echo "DB Connection: FAILED\n";
    echo "Error: " . $e->getMessage() . "\n";
}

echo "\n=== Storage Directories ===\n";
$dirs = ['/tmp/storage/framework/views', '/tmp/storage/logs'];
foreach ($dirs as $d) {
    @mkdir($d, 0777, true);
    echo "$d: " . (is_writable($d) ? 'WRITABLE' : 'NOT WRITABLE') . "\n";
}

echo "\n=== Vendor Autoload ===\n";
$vendorPath = __DIR__ . '/../vendor/autoload.php';
echo "vendor/autoload.php: " . (file_exists($vendorPath) ? 'EXISTS' : 'MISSING') . "\n";
