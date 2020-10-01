<?php  

// Datos para conectar la bd
$dbserver = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbdatabase = 'example';

try {
  $connection = new PDO("mysql:host=$dbserver;dbname=$dbdatabase;", $dbusername, $dbpassword);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
}






?>