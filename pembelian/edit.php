 <?php 
// koneksi database
require_once('../koneksi/config.php');
/*$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
 var_dump($id_barang, $nama_barang, $harga, $stok); die(); */
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_buku = $_POST['nama_buku'];
$toko = $_POST['toko'];
$tgl = $_POST['tgl'];
$harga = $_POST['harga'];

mysqli_query($conn,"update pembelian set nama_buku = '$nama_buku', toko ='$toko', tgl = '$tgl', harga = '$harga' where id ='$id'");

header("location:data_pembelian.php?Data Berhasil di edit");

?>
