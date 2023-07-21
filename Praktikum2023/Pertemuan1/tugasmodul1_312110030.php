<h3>Tugas Praktikum Web 2023 Modul 1</h3>
<?php
    $name = "Abraham Leo";
    echo "Nama: $name". "<br/><br/>";
    hitung($name);
    
function hitung($name) {
    $abjada = ['A'];
    $abjadi = ['I'];
    $abjadu = ['U'];
    $abjade = ['E'];
    $abjado = ['O'];
    $abjad = ['A', 'I', 'U', 'E', 'O']; 
    $counta = 0;
    $counti = 0;
    $countu= 0;
    $counte = 0;
    $counto = 0;
    $count = 0;
    
    foreach (str_split($name) as $letter) {
        if (in_array(strtoupper($letter), $abjad,)) {
            $count++;
        }
    }
    echo "Total huruf vokal pada nama '$name' ada: $count". "<br />";
    echo "Rinciannya: " ."<br/><br/>";
    foreach (str_split($name) as $letter) {
        if (in_array(strtoupper($letter), $abjada,)) {
            $counta++;
        }
    }
    echo "Huruf A pada nama '$name' ada: $counta". "<br />"; 
    

    foreach (str_split($name) as $letter) {
        if (in_array(strtoupper($letter), $abjadi,)) {
            $counti++;
        }
    }
    echo "Huruf I pada nama '$name' ada: $counti". "<br />";

    foreach (str_split($name) as $letter) {
        if (in_array(strtoupper($letter), $abjadu,)) {
            $countu++;
        }
    }
    echo "Huruf U pada nama '$name' ada: $countu". "<br />";

    foreach (str_split($name) as $letter) {
        if (in_array(strtoupper($letter), $abjade,)) {
            $counte++;
        }
    }
    echo "Huruf E pada nama '$name' ada: $counte". "<br />";

    foreach (str_split($name) as $letter) {
        if (in_array(strtoupper($letter), $abjado,)) {
            $counto++;
        }
    }
    echo "Huruf O pada nama '$name' ada: $counto". "<br />";
} 
?>