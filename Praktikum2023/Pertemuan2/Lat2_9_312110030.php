<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Luas Persegi Panjang</title>
</head>
<body>
    <h1>Menghitung Luas Persegi Panjang</h1>
    
    <input type="number" id="panjang" placeholder="Panjang" onkeyup="hitungLuas()">
    <input type="number" id="lebar" placeholder="Lebar" onkeyup="hitungLuas()">
    <p id="luas"></p>


    <script>
        function hitungLuas() {
            let panjang = document.getElementById("panjang").value;
            let lebar = document.getElementById("lebar").value;

            if (panjang && lebar) {
                let luas = panjang * lebar;
                document.getElementById("luas").innerHTML = "Luas: " + luas;
            } else {
                document.getElementById("luas").innerHTML = "";
                }
            }
    </script>
</body>
</html>
