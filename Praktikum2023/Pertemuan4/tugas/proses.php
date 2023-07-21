<?php
// Include file koneksi.php untuk menghubungkan ke database
require_once "koneksi.php";

// Periksa apakah form telah di-submit dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $id_barang = $_POST["id_barang"];
    $nama_barang = $_POST["nama_barang"];
    $keterangan = $_POST["keterangan"];

    // Persiapkan pernyataan SQL untuk memasukkan data ke dalam tabel
    $sql = "INSERT INTO barang (id_barang, nama_barang, keterangan)
            VALUES ('$id_barang', '$nama_barang', '$keterangan')";

    // Eksekusi pernyataan SQL
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi
$conn->close();
?>
