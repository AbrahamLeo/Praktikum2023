<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" name="nama" id="nama" placeholder="Masukkan nama" onkeyup="tulisNama()">
    <p id="namasaya"></p>
    <script>
        function tulisNama() {
            let nama = document.getElementById("nama").value;
            let namasaya = document.getElementById("namasaya");
            if (nama) {
                namasaya.innerHTML = "Nama Anda adalah " + nama;
            } else {
                namasaya.innerHTML = "";
            }
        }
    </script>
</body>
</html>