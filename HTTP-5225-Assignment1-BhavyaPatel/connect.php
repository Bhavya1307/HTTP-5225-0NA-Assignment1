<?php
// Connecting to the database
$connect = mysqli_connect('localhost', 'root', 'root', 'public art and monuments');

// Error Handling
if (!$connect) {
    echo "Error code: " . mysqli_connect_errno();
    echo "Error name: " . mysqli_connect_error();
    exit;
}
?>