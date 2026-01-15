<?php
$dbhost = 'localhost';
$dbname = 'perfectr_perfectrgs';
$dbuser = 'perfectr_perfectrgs';
$dbpass = '3gZfRyTqFj';


try {
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
    echo "Connection error :" . $exception->getMessage();
}
define("BASE_URL", "https://lms.veteranminds.in/");
define("ADMIN_URL", BASE_URL."admin/");

define("SMTP_HOST", "mail.veteranminds.in");
define("SMTP_PORT", "587");
define("SMTP_USERNAME", "");
define("SMTP_PASSWORD", "");
define("SMTP_ENCRYPTION", "tls");
define("SMTP_FROM", "support@veteranminds.in");