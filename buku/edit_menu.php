<?php
require_once('../koneksi/config.php');
$id      = $_GET['id'];
$trans      = mysqli_query($conn, "select * from buku where id ='$id'");
$d          = mysqli_fetch_array($trans);
// membuat data jurusan menjadi dinamis dalam bentuk array
/*$sql        = mysqli_query($conn, "select * from pelanggan'");
$pelanggan  = mysqli_fetch_array($sql);
*/
?>
<!DOCTYPE html>
<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>My Bookshelf</title>
    </head>
    <body>
         <h5 class="card-header" style="text-align: center!important;">Edit Data Buku</h5>
            <div class="card-body d-flex justify-content-center ">
            <div class="w-50 border p-3 mt-3">

        <form action=" " method="POST">  
        <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">ID</label>
           <input type="text" class="form-control" id="exampleInputPassword1" name="id" value="<?php echo $d['id'];?>">
         </div>                   
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Judul Buku</label>
           <input type="text" class="form-control" id="exampleInputPassword1" name="nama_buku" value="<?php echo $d['nama_buku'];?>">
         </div>
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Penulis</label>
           <input type="text" class="form-control" id="exampleInputPassword1" name="pengarang" value="<?php echo $d['pengarang'];?>">
         </div>
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Penerbit</label>
           <input type="text" class="form-control" id="exampleInputPassword1" name="penerbit" value="<?php echo $d['penerbit'];?>">
         </div>

              <input class="btn btn-success mt-3" type="submit" name="edit" value="Edit">
               <br>
         <a href="data.php" type="button" class="btn btn-success mt-3">Kembali</a>
                                                     
          </div>
          </form>
      </div>
      </div>

<?php

if(isset($_POST['edit'])){
// koneksi database
$id = $_POST['id'];
$nama_buku = $_POST['nama_buku'];
$pengarang = $_POST['pengarang'];
$penerbit= $_POST['penerbit'];


mysqli_query($conn,"update buku set nama_buku = '$nama_buku', pengarang = '$pengarang', penerbit = '$penerbit' where id = '$id'");


header("location:data.php?Data Berhasil di edit");
/* var_dump($nota, $id_trans, $id_pelanggan, $id_barang, $total); die();*/
} else {

}

?>
</body>
</html>
