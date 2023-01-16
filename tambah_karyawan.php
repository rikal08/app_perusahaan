<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h6 class="m-0 font-weight-bold text-primary">Tambah Karyawan</h6>
			</div>
			<div class="card-body">
				<form action="" method="POST">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Nama Karyawan</label>
								<input type="" class="form-control" name="nama_kar">
							</div>
							<div class="form-group">
								<label>Departement</label>
								<select class="form-control" name="id_dep">
									<?php 
									$dep = mysqli_query($koneksi,"SELECT * FROM departemen");
									foreach ($dep as $data_dep) {


										?>
										<option value="<?= $data_dep['id_dep'] ?>"><?= $data_dep['nama_dep'] ?> (<?= $data_dep['level'] ?>)</option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="date" class="form-control" name="tgl_lahir">
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
								<select class="form-control" name="jk">
									<option value="LK">LK</option>
									<option value="PR">PR</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Alamat</label>
								<input type="" class="form-control" name="alamat">
							</div>
							<div class="form-group">
								<label>Telepon</label>
								<input type="" name="telepon" class="form-control">
							</div>
							<div class="form-group">
								<label>Tanggal Masuk</label>
								<input type="date" class="form-control" name="tgl_masuk">
							</div>

							<div class="form-group">
								<label>Gaji (Ex: 5000000 tanpa tanda titik)</label>
								<input type="number" name="gaji" class="form-control">
							</div>
						</div>
					</div>
					
					

					<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>


<?php 

if (isset($_POST['simpan'])) {
	$id_kar = rand(1000,9999);
	$nama_kar = $_POST['nama_kar'];
	$id_dep = $_POST['id_dep'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];
	$gaji = $_POST['gaji'];
	$tgl_masuk = $_POST['tgl_masuk'];

	$simpan = mysqli_query($koneksi,"INSERT INTO karyawan VALUES ('$id_kar','$nama_kar','$id_dep','$tgl_lahir','$jk','$alamat','$telepon','$gaji','$tgl_masuk')");

	echo "<script>alert('Data berhasil disimpan!');window.location='index.php?p=karyawan'</script>";
}

?>