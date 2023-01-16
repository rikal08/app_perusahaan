<?php 
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM departemen WHERE id_dep='$id'");
$hasil = mysqli_fetch_array($data);

?>
<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">
				<h6 class="m-0 font-weight-bold text-primary">Edit Departement</h6>
			</div>
			<div class="card-body">
				<form action="" method="POST">
					<div class="form-group">
						<label>Nama Departemen</label>
						<input value="<?= $hasil['nama_dep'] ?>" type="" class="form-control" name="nama_dep">
					</div>
					<div class="form-group">
						<label>Level</label>
						<input value="<?= $hasil['level'] ?>" type="" class="form-control" name="level">
					</div>

					<button type="submit" name="update" class="btn btn-primary">Update</button>
					<a href="index.php?p=dep" class="btn btn-danger">Kembali</a>
				</form>
			</div>
		</div>
	</div>
</div>


<?php 

if (isset($_POST['update'])) {
	$nama_dep = $_POST['nama_dep'];
	$level = $_POST['level'];

	$simpan = mysqli_query($koneksi,"UPDATE departemen SET nama_dep='$nama_dep',level='$level' WHERE id_dep='$id'");

	echo "<script>alert('Data berhasil diupdate!');window.location='index.php?p=dep'</script>";
}

?>