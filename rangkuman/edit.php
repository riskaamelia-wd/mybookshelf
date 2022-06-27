 <?php 
require_once('../koneksi/config.php');
$id = $_POST['id'];
$nama_buku = $_POST['nama_buku'];
$ringkas = $_POST['ringkas'];
$rating = $_POST['rating'];


mysqli_query($conn,"update rangkuman set nama_buku = '$nama_buku', ringkas = '$ringkas', rating = '$rating' where id ='$id'");

header("location:data.php?Data Berhasil di edit");

?>