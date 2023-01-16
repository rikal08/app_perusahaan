<?php 
$id = $_GET['id'];

$user = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id'");
$data = mysqli_fetch_array($user);

?>
<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">
				<h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
			</div>
			<div class="card-body">
				<form action="" method="POST">
					<div class="form-group">
						<label>Nama</label>
						<input type="" value="<?= $data['nama'] ?>" class="form-control" name="nama">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="" value="<?= $data['username'] ?>" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="" value="<?= $data['password'] ?>" class="form-control" name="password">
					</div>
					

					<button type="submit" name="update" class="btn btn-primary">Update</button>
					<a href="index.php?p=user" class="btn btn-danger">Kembali</a>
				</form>
			</div>
		</div>
	</div>
</div>


<?php 

if (isset($_POST['update'])) {
	 $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $simpan = mysqli_query($koneksi,"UPDATE user SET nama='$nama',username='$username',password='$password' WHERE id_user='$id'");

    if ($simpan==true) {
        echo "<script>alert('Berhasil diupdate');window.location='index.php?p=user'</script>";
    }
}

?>