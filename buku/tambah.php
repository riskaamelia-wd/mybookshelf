<?php
require_once('../koneksi/config.php');
// $trans      = mysqli_query($conn, "SELECT * FROM buku INNER JOIN pembelian INNER JOIN target INNER JOIN ringkasan");
// $d       = mysqli_fetch_array($trans);

?>

<!DOCTYPE html>
<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dashboard</title>
    </head>
    <body>
        <br>
         <h5 class="card-header" style="text-align: center!important;">Tambah Data</h5>
            <div class="card-body d-flex justify-content-center ">
            <div class="w-50 border p-3 mt-3">
			<!-- form -->
			<form action=" " method="POST">
				<div class="mb-3">
				   <label for="exampleInputPassword1" class="form-label">ID</label>
				   <input type="text" class="form-control" id="id" name="id">
				</div>
				<div class="mb-3">
				   <label for="exampleInputPassword1" class="form-label">Judul Buku</label>
				   <input type="text" class="form-control" id="nama_buku" name="nama_buku">
				</div>
				 <div class="mb-3">
				  <label for="exampleInputPassword1" class="form-label">Pengarang</label>
				  <input type="text" class="form-control" id="pengarang" name="pengarang" >
				</div>
				<div class="mb-3">
				   <label for="exampleInputPassword1" class="form-label">Penerbit</label>
				   <input type="text" class="form-control" id="penerbit" name="penerbit">
				</div>
					<!-- <button class="btn btn-primary" name="tambah">Simpan</button> -->
					<input class="btn btn-success mt-3" type="submit" name="tambah" value="Simpan" >
					<a href="data.php" type="button" class="btn btn-success mt-3">Kembali</a>
			</form>
			</div>
			 </div>
			</div>
			</div>
			</div>



<?php

if(isset($_POST['tambah'])){
$id = $_POST['id'];
$nama_buku = $_POST['nama_buku'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
    $sql = "INSERT INTO buku VALUES ('$id', '$nama_buku','$pengarang', '$penerbit')";
     mysqli_query($conn, $sql);

 echo "<script>alert('Data Berhasil di Tambahkan');history.go(-2);</script>";

/* var_dump($nota, $id_barang, $id_pelanggan, $id_trans, $total); die();*/
} else {

}

?>

</body>
</html>