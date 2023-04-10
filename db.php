<?php
$servername = "localhost"; // Veritabanı sunucusu adı
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifresi
$dbname = "pdf_generator"; // Veritabanı adı

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // PDO hata ayıklama modunu etkinleştirme
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Veritabanına başarıyla bağlandı
} catch(PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}
