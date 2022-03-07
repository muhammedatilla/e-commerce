<?php 

$dsn = 'mysql:dbname=iwear;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $baglanti = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Bağlantı kurulamadı: ' . $e->getMessage();
}

?>