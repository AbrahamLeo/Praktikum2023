<?php
function hitungLuasSetengahLingkaran($diameter)
{
    $jari_jari = $diameter / 2;
    $luas = 0.5 * pi() * pow($jari_jari, 2);
    return $luas;
}

// Contoh penggunaan fungsi untuk diameter 10 CM
$diameter = 10;
$luas_setengah_lingkaran = hitungLuasSetengahLingkaran($diameter);
echo "Luas setengah lingkaran dengan diameter $diameter CM adalah: $luas_setengah_lingkaran CM^2\n";
?>
