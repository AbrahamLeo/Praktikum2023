<?php
// Fungsi rekursif untuk menghitung bilangan Fibonacci
function fibonacci($n)
{
    if ($n <= 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Input bilangan ke-n
$bilanganKe = 20;

// Memanggil fungsi fibonacci() dan menampilkan hasilnya
$hasil = fibonacci($bilanganKe);
echo "Bilangan Fibonacci ke-$bilanganKe adalah: $hasil";
?>