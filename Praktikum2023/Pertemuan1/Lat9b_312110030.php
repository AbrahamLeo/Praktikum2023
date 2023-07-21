<?php
// Fungsi untuk menghitung nilai pangkat
function pangkat($x, $y)
{
    if ($y == 0) {
        return 1;
    } elseif ($y > 0) {
        return $x * pangkat($x, $y - 1);
    } else {
        return 1 / pangkat($x, -$y);
    }
}

// Input bilangan dan pangkat
$x = 5; // Bilangan yang akan dikuadratkan
$y = 4; // Pangkat

// Memanggil fungsi pangkat() dan menampilkan hasilnya
$hasil = pangkat($x, $y);
echo "$x pangkat $y adalah: $hasil";
?>