<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">
				<h6 class="m-0 font-weight-bold text-primary">Tambah Departement</h6>
			</div>
			<div class="card-body">
				<form action="" method="POST">
					<div class="form-group">
						<label>Nama Departemen</label>
						<input type="" class="form-control" name="nama_dep">
					</div>
					<div class="form-group">
						<label>Level</label>
						<input type="" class="form-control" name="level">
					</div>

					<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>


<?php 

if (isset($_POST['simpan'])) {
	$nama_dep = $_POST['nama_dep'];
	$level = $_POST['level'];

	$simpan = mysqli_query($koneksi,"INSERT INTO departemen VALUES (NULL,'$nama_dep','$level')");

	echo "<script>alert('Data berhasil disimpan!');window.location='index.php?p=dep'</script>";
}

?>