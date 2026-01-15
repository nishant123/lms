<?php
$dbhost = 'localhost';
$dbname = 'eduzora_lms';
$dbuser = 'root';
$dbpass = '12345678';
try {
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
    echo "Connection error :" . $exception->getMessage();
}
define("BASE_URL", "http://localhost:8888/project/eduzora_lms/");
define("ADMIN_URL", BASE_URL."admin/");

define("SMTP_HOST", "sandbox.smtp.mailtrap.io");
define("SMTP_PORT", "587");
define("SMTP_USERNAME", "2f820a22fe5248");
define("SMTP_PASSWORD", "dfcf264b4b6737");
define("SMTP_ENCRYPTION", "tls");
define("SMTP_FROM", "contact@yourwebsite.com");