<?php

$server   = 'localhost';
$username = 'root';
$password = '';
$database = 'datamahasiswa';

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die('Gagal terhubung: ' . $conn->connect_error);
}
/*else{
    echo '<h3>BERHASIL TERHUBUNG</h3>';
}*/
?>