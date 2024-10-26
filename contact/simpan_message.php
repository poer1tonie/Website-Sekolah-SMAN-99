<?php
// simpan_message.php
include '../include/koneksidb.php';

function simpanPesan($name, $email, $message) {
    // Membuat koneksi ke database
    $conn = koneksiDB();

    // Query untuk menyimpan data (prepared statement)
    $sql = "INSERT INTO tbl_contacts (name, email, message) VALUES (?, ?, ?)";

    // Siapkan statement
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die('Error: ' . $conn->error);
    }

    // Bind parameter
    $stmt->bind_param('sss', $name, $email, $message);

    // Eksekusi query
    if ($stmt->execute()) {
        // Jika berhasil simpan, redirect dengan query string untuk menampilkan modal
        echo "<script>
                window.location.href='../index.php?status=success';
              </script>";
    } else {
        echo "Gagal menyimpan pesan: " . $stmt->error;
    }

    // Menutup koneksi
    $stmt->close();
    $conn->close();
}

// Proses form jika ada request POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validasi sederhana (pastikan semua field diisi)
    if (!empty($name) && !empty($email) && !empty($message)) {
        simpanPesan($name, $email, $message);
    } else {
        echo "Semua field wajib diisi.";
    }
}
?>
