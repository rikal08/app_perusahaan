<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">
				<h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
			</div>
			<div class="card-body">
				<form action="" method="POST">
					<div class="form-group">
						<label>Nama</label>
						<input type="" class="form-control" name="nama">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="" class="form-control" name="password">
					</div>
					

					<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>


<?php 

if (isset($_POST['simpan'])) {
	 $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $simpan = mysqli_query($koneksi,"INSERT INTO user VALUES (NULL,'$nama','$username','$password')");

    if ($simpan==true) {
        echo "<script>alert('Berhasil disimpan');window.location='index.php?p=user'</script>";
    }
}

?>