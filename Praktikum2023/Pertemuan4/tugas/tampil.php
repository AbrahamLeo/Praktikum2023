<?php
// Data array makanan
$makanan[1] = "Lumpia"; 
$makanan[4] = "Bakpia";
$makanan[7] = "Dodol Garut";
$makanan[8] = "Siomay";
$makanan[9] = "Soto Makassar";

// Fungsi untuk menampilkan seluruh data makanan
function tampilkanSemuaMakanan($makanan) {
    $i = 1;
    while ($i <= max(array_keys($makanan))) {
        if (isset($makanan[$i])) {
            echo "Makanan ke-$i: " . $makanan[$i] . "<br>";
        }
        $i++;
    }
}

// Memanggil fungsi untuk menampilkan data makanan
tampilkanSemuaMakanan($makanan);
?>
