<?php
$email = 'abraham@mhs.pelitabangsa.ac.id';

// Find the position of the '@' symbol
$at_pos = strpos($email, '@');

// Extract the username using substr based on the position of '@'
$username = substr($email, 0, $at_pos);

echo "Username: " . $username;
?>
