<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Target</title>
  </head>
<body>
    <?php
    require_once('../koneksi/config.php');
    $id = $_GET['id'];
    $data = mysqli_query($conn,"select * from target where id ='$id'");
    while($d = mysqli_fetch_array($data)){
    ?>
    <h5 class="card-header" style="text-align: center!important;">Edit Target Membaca</h5>
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
           <label for="exampleInputPassword1" class="form-label">Target</label>
           <input type="text" class="form-control" id="exampleInputPassword1" name="target" value="<?php echo $d['target'];?>">
         </div>
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Mulai</label>
         <input type="date" class="form-control" id="exampleInputPassword1" name="tgl_mulai" value="<?php echo $d['tgl_mulai'];?>">
         </div>
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Selesai</label>
         <input type="date" class="form-control" id="exampleInputPassword1" name="tgl_selesai" value="<?php echo $d['tgl_selesai'];?>">
         </div>
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Status (selesai/ongoing/belum)</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="status" value="<?php echo $d['status'];?>">
          </div>
              <label for="exampleInputPassword1" class="form-label">* tidak untuk diubah</label><br>
              <input class="btn btn-success mt-3" type="submit" name="ubahTarget" value="Edit" >
              <a href="data.php" type="button" class="btn btn-success mt-3">Kembali</a>
          </div>
          </div>
          </form>
      </div>
      </div>
    <?php } ?>
</body>
</html>

