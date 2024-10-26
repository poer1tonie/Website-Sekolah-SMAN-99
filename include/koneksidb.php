<?php
// koneksidb.php

function koneksiDB() {
    // Konfigurasi database
    $host = 'localhost';
    $user = 'root'; // Sesuaikan dengan user database Anda
    $pass = '';     // Sesuaikan dengan password database Anda
    $dbname = 'db_projek_akhir'; // Ganti dengan nama database Anda

    // Membuat koneksi ke database
    $conn = new mysqli($host, $user, $pass, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    return $conn;
}
?>
