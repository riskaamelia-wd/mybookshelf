<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Pembelian</title>
  </head>
<body>
    <?php
    require_once('../koneksi/config.php');
    $id = $_GET['id'];
    $data = mysqli_query($conn,"select * from pembelian where id ='$id'");
    while($d = mysqli_fetch_array($data)){
    ?>
    <h5 class="card-header" style="text-align: center!important;">Edit Pembelian</h5>
    <div class="card-body d-flex justify-content-center ">
    <div class="w-50 border p-3 mt-3">

         <!-- form -->
    <form action="edit.php" method="POST">
        <div class="modal-body">   
        <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">ID *</label>
           <input type="text" class="form-control" id="exampleInputPassword1" name="id" value="<?php echo $d['id'];?>">
         </div>
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Judul Buku *</label>
           
         <input type="text" class="form-control" id="exampleInputPassword1" name="nama_buku" value="<?php echo $d['nama_buku'];?>">
         </div>

         
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Toko</label>
           <input type="text" class="form-control" id="exampleInputPassword1" name="toko" value="<?php echo $d['toko'];?>">
         </div>
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Tanggal</label>
         <input type="date" class="form-control" id="exampleInputPassword1" name="tgl" value="<?php echo $d['tgl'];?>">
         </div>
         
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Harga</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="harga" value="<?php echo $d['harga'];?>">
          </div>
              <label for="exampleInputPassword1" class="form-label">* tidak untuk diubah</label><br>
              <input class="btn btn-success mt-3" type="submit" name="ubah" value="Edit" >
              <a href="data_pembelian.php" type="button" class="btn btn-success mt-3">Kembali</a>
          </div>
          </div>
          </form>
      </div>
      </div>
    <?php } ?>
</body>
</html>

