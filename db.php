<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = ''; // <- no password for XAMPP's root user by default
$DATABASE = 'softeng';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if ($con) {
    echo "Database connected successfully";
} else {
    die("Connection failed: " . mysqli_connect_error());
}
?>
