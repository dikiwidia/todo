<?php
$host = "localhost";
$db_name = "todo";
$username = "root";
$password = ""; // Kosongkan jika menggunakan XAMPP default

try {
    // 1. Inisialisasi koneksi PDO
    $db = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);

    // 2. Mengatur mode error ke Exception
    // Ini penting agar jika ada error, ia akan lari ke blok 'catch'
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 3. (Opsional) Mengatur mode fetch default ke object atau associative array
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Echo ini hanya untuk testing, hapus jika sudah berhasil
    // echo "Koneksi Berhasil!"; 

} catch (PDOException $e) {
    // Jika koneksi gagal, tangkap pesan error-nya
    die("Koneksi Database Gagal: " . $e->getMessage());
}
?>