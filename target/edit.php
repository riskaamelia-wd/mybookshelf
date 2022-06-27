 <?php 
require_once('../koneksi/config.php');
$id = $_POST['id'];
$nama_buku = $_POST['nama_buku'];
$target = $_POST['target'];
$tgl_mulai = $_POST['tgl_mulai'];
$tgl_selesai = $_POST['tgl_selesai'];
$status = $_POST['status'];


mysqli_query($conn,"update target set nama_buku = '$nama_buku', target ='$target', tgl_mulai = '$tgl_mulai', tgl_selesai = '$tgl_selesai', status = '$status' where id ='$id'");

header("location:data.php?Data Berhasil di edit");

?>
