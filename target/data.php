<?php 
require_once('../koneksi/config.php');
session_start();
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Target Membaca</title>
  </head>
  <body>

<!--   	navigasi -->
		   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  		<div class="container-fluid">
				    <a class="navbar-brand" href="../buku/data.php">My Bookshelf</a>
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
		    	<div class="collapse navbar-collapse" id="navbarNav">
				      <ul class="navbar-nav">
				        <li class="nav-item">
				          <a class="nav-link active" aria-current="page" href="#">Target</a>
				        </li>
				        <li class="nav-item">
			            <a class="nav-link active" aria-current="page" href="../pembelian/data_pembelian.php">Pembelian</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link active" aria-current="page" href="../rangkuman/data.php">Rangkuman</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link active" aria-current="page" style="color: red;" href="../logout.php">Logout</a>
			          </li>
				      </ul>
		   		 </div>
		 		 </div>
			</nav>
<!-- tabel  -->
			<div class="container">
			<div class="card mt-5">
			  <h5 class="card-header">Tabel Target Membaca</h5>
			  <div class="card-body">
							    <table class="table table-striped table-hover ">
							  <thead>
							    <tr>
							    	<th scope="col">No</th>
							    	<th scope="col">ID</th>
								    <th scope="col">Judul Buku</th>
								    <th scope="col">Target (hari)</th>
								    <th scope="col">Mulai</th>
							        <th scope="col">Selesai</th>
						   	        <th scope="col">Status</th>
								    <th scope="col">Aksi</th>
							    </tr>
							  </thead>
							  <?php
					       require_once('../koneksi/config.php');
					        $no = 1;
					        $query = mysqli_query($conn, 'SELECT * FROM target');
					        while ($data = mysqli_fetch_array($query)) {
					        	?>
								  <tbody>
								     <tr>
								     	<td><?php echo $no++ ?></td>
						                <td><?php echo $data['id'] ?></td>
						                <td><?php echo $data['nama_buku'] ?></td>
						                <td><?php echo $data['target'] ?></td>
						                <td><?php echo $data['tgl_mulai'] ?></td>
						                <td><?php echo $data['tgl_selesai'] ?></td>
						                <td><?php echo $data['status'] ?></td>
								      <td>
									 <a href="editTarget.php?id=<?=$data['id']?>" type="button" class="btn btn-success btn-md">Edit</a>

									 <a href="hapus.php?id=<?=$data['id']?>" type="button" class="btn btn-danger btn-md">Hapus</a>
								      </td>
								    </tr>
								  </tbody>
											<?php } ?>
									</table> 

									<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
							              <div class="modal-dialog modal-dialog-centered">
							                <div class="modal-content">
							                  <div class="modal-header">
							                    <h5 class="modal-title" id="exampleModalToggleLabel">Masukkan Target Membaca</h5>
							                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							                  </div>
							                  <div class="modal-body">
							                  	<!-- form -->

							                  	<form action=" " method="post">
														    <div class="modal-body">
														                 <!-- form -->
														     		 <div class="mb-3">
														              <label for="exampleInputPassword1" class="form-label">ID</label>
														             <input type="text" class="form-control" id="exampleInputPassword1" name="id">
														             </div>
														             <div class="mb-3">
														              <label for="exampleInputPassword1" class="form-label">Judul Buku</label>
														             <input type="text" class="form-control" id="exampleInputPassword1" name="nama_buku">
														             </div>
														             <div class="mb-3">
														               <label for="exampleInputPassword1" class="form-label">Target</label>
														               <input type="text" class="form-control" id="exampleInputPassword1" name="target" >
														             </div>
														             <div class="mb-3">
														               <label for="exampleInputPassword1" class="form-label">Mulai</label>
														             <input type="date" class="form-control" id="exampleInputPassword1" name="tgl_mulai">
														             </div>
														             <div class="mb-3">
														               <label for="exampleInputPassword1" class="form-label">Selesai</label>
														              <input type="date" class="form-control" id="exampleInputPassword1" name="tgl_selesai">
														             </div>
														             <div class="mb-3">
														               <label for="exampleInputPassword1" class="form-label">Status (selesai/ongoing/Belum)</label>
														               <input type="text" class="form-control" id="exampleInputPassword1" name="status">
														             </div>

														            <input class="btn btn-success mt-3" type="submit" name="tambah" value="Tambah">
														            

														       </div>
													</div>
														       </form>
							                  </div>
							                </div>
							              </div>
							              <label for="exampleInputPassword1" class="form-label">* ID dan Judul Buku harus sesuai dengan tabel buku</label><br>
							            <a class="btn btn-primary mt-3" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Tambah</a>
			 							 <a href="../buku/data.php" type="button" class="btn btn-primary mt-3">Tabel Buku</a>
							            </div>

							        </div>

			  </div>

			  <div>
			</div>
			</div>

	<?php

if(isset($_POST['tambah'])){
    $sql1 = "insert into target values ('{$_POST['id']}','{$_POST['nama_buku']}','{$_POST['target']}','{$_POST['tgl_mulai']}','{$_POST['tgl_selesai']}','{$_POST['status']}')";

     mysqli_query($conn, $sql1);
    
  
  echo "<script>alert('Data Berhasil di Tambahkan');history.go(-1);</script>";

} else {

}
?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
  </body>
  </html>