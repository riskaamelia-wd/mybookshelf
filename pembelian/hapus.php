<?php 
require_once('../koneksi/config.php');


$id = $_GET['id'];
$sqldelete = "DELETE FROM  pembelian where id ='$id' ";
mysqli_query($conn, $sqldelete);

header ("location: data_pembelian.php");
?>