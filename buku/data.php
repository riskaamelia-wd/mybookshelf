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

    <title>Buku</title>
  </head>
  <body>

<!--   	navigasi -->
		   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  		<div class="container-fluid">
				    <a class="navbar-brand" disabled>My Bookshelf</a>
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
		    	<div class="collapse navbar-collapse" id="navbarNav">
				      <ul class="navbar-nav">
				        <li class="nav-item">
				          <a class="nav-link active" aria-current="page" href="../target/data.php">Target</a>
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
			  <h5 class="card-header"> Buku </h5>
			  <div class="card-body">
							    <table class="table table-striped table-hover ">
							  <thead>
							    <tr>
							    	<th scope="col">No </th>
							      <th scope="col">ID</th>
							      <th scope="col">Judul Buku</th>
							      <th scope="col">Penulis</th>
							      <th scope="col">Penerbit</th>
							      <th scope="col">Aksi</th>
							      <!-- <th scope="col">Detail</th> -->
							    </tr>
							  </thead>
							  <?php
					        require_once('../koneksi/config.php');
					        $no = 1;
					        $query = mysqli_query($conn, 'SELECT * FROM buku');
					        while ($data = mysqli_fetch_array($query)) {
					        	?>
								  <tbody>
								     <tr>
			                <td><?php echo $no++ ?></td>
			                <td><?php echo $data['id'] ?></td>
			                <td><?php echo $data['nama_buku'] ?></td>
			                <td><?php echo $data['pengarang'] ?></td>
			                <td><?php echo $data['penerbit'] ?></td>
								      <td>

										  <a href="edit_menu.php?id=<?=$data['id']?>" type="button" class="btn btn-success btn-md">Edit</a>

										  <a href="hapus.php?id=<?=$data['id']?>" type="button" class="btn btn-success btn-md">Hapus</a>

								      </td>

								    </tr>
								  </tbody>
											<?php } ?>
									</table> 

								   <a class="btn btn-primary" href="tambah.php" role="button">Tambah</a>
							                  <br> <br>
								   <nav aria-label="...">
									  <ul class="pagination pagination-sm">
									    <li class="page-item active" aria-current="page">
									      <span class="page-link">Data</span>
									    </li>
									    <li class="page-item"><a class="page-link" href="../pembelian/data_pembelian.php">Pembelian</a></li>
									    <li class="page-item"><a class="page-link" href="../rangkuman/data.php">Rangkuman</a></li>
									    <li class="page-item"><a class="page-link" href="../target/data.php">Target</a></li>
									  </ul>
									</nav>

			  </div>
			  <div>
			</div>
			</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
  </body>
  </html>