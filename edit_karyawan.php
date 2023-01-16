<?php 
$id = $_GET['id'];
$kar = mysqli_query($koneksi,"SELECT * FROM karyawan WHERE id_kar='$id'");

$data = mysqli_fetch_array($kar);
?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h6 class="m-0 font-weight-bold text-primary">Edit Karyawan</h6>
			</div>
			<div class="card-body">
				<form action="" method="POST">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Nama Karyawan</label>
								<input type="" value="<?= $data['nama_kar'] ?>" class="form-control" name="nama_kar">
							</div>
							<div class="form-group">
								<label>Departement</label>
								<select class="form-control" name="id_dep">

									<?php 
									$dep = mysqli_query($koneksi,"SELECT * FROM departemen WHERE id_dep='$data[id_dep]'");
									foreach ($dep as $data_dep) {


										?>
										
											
										<option selected="" value="<?= $data_dep['id_dep'] ?>"><?= $data_dep['nama_dep'] ?> (<?= $data_dep['level'] ?>)</option>
										
									<?php } ?>

									<?php 
									$dep = mysqli_query($koneksi,"SELECT * FROM departemen WHERE id_dep !='$data[id_dep]'");
									foreach ($dep as $data_dep) {


										?>
										
											
										<option value="<?= $data_dep['id_dep'] ?>"><?= $data_dep['nama_dep'] ?> (<?= $data_dep['level'] ?>)</option>
										
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input value="<?= $data['tgl_lahir'] ?>" type="date" class="form-control" name="tgl_lahir">
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
								<select class="form-control" name="jk">
									<option value="<?= $data['jk'] ?>"><?= $data['jk'] ?></option>
									<option value="LK">LK</option>
									<option value="PR">PR</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Alamat</label>
								<input value="<?= $data['alamat'] ?>" type="" class="form-control" name="alamat">
							</div>
							<div class="form-group">
								<label>Telepon</label>
								<input value="<?= $data['telepon'] ?>" type="" name="telepon" class="form-control">
							</div>
							<div class="form-group">
								<label>Tanggal Masuk</label>
								<input value="<?= $data['tgl_masuk'] ?>" type="date" class="form-control" name="tgl_masuk">
							</div>

							<div class="form-group">
								<label>Gaji (Ex: 5000000 tanpa tanda titik)</label>
								<input value="<?= $data['gaji'] ?>" type="number" name="gaji" class="form-control">
							</div>
						</div>
					</div>
					
					

					<button type="submit" name="update" class="btn btn-primary">Update</button>
					<a href="index.php?p=karyawan" class="btn btn-danger">Kembali</a>
				</form>
			</div>
		</div>
	</div>
</div>


<?php 

if (isset($_POST['update'])) {
	
	$nama_kar = $_POST['nama_kar'];
	$id_dep = $_POST['id_dep'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];
	$gaji = $_POST['gaji'];
	$tgl_masuk = $_POST['tgl_masuk'];

	$simpan = mysqli_query($koneksi,"UPDATE karyawan SET nama_kar='$nama_kar',id_dep='$id_dep',tgl_lahir='$tgl_lahir',jk='$jk',alamat='$alamat',telepon='$telepon',gaji='$gaji',tgl_masuk='$tgl_masuk' WHERE id_kar='$id'");

	echo "<script>alert('Data berhasil update!');window.location='index.php?p=karyawan'</script>";
}

?>