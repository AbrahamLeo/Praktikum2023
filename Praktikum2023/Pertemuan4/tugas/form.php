<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Barang</title>
</head>
<body>
    <h2>Form Input Data Barang</h2>
    <form action="proses.php" method="POST">
        <label for="id_barang">ID Barang:</label>
        <input type="text" id="id_barang" name="id_barang" required><br>

        <label for="nama_barang">Nama Barang:</label>
        <input type="text" id="nama_barang" name="nama_barang" required><br>

        <label for="keterangan">Keterangan:</label><br>
        <textarea id="keterangan" name="keterangan" rows="4" cols="50"></textarea><br>

        <input type="submit" value="Tambahkan">
    </form>
</body>
</html>
