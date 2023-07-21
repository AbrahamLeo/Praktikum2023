<?php
session_start();

if (isset($_SESSION['data'])) {
    $data = $_SESSION['data'];
    
    foreach ($data as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
}

session_unset();
session_destroy();
?>
