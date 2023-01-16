<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
    </div>
    <div class="card-header">
        <a href="index.php?p=tambah-karyawan" class="btn btn-success">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Tanggal Masuk</th>
                        <th>Departement</th>
                        <th>Level</th>
                        <th>Gaji</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        $no=1;
                        $kar = mysqli_query($koneksi,"SELECT * FROM karyawan JOIN departemen ON karyawan.id_dep=departemen.id_dep");
                        foreach ($kar as $data_kar) {
                            
                        
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data_kar['id_kar'] ?></td>
                        <td><?= $data_kar['nama_kar'] ?></td>
                        <td><?= $data_kar['tgl_lahir'] ?></td>
                        <td><?= $data_kar['jk'] ?></td>
                        <td><?= $data_kar['alamat'] ?></td>
                        <td><?= $data_kar['telepon'] ?></td>
                        <td><?= $data_kar['tgl_masuk'] ?></td>
                        <td><?= $data_kar['nama_dep'] ?></td>
                        <td><?= $data_kar['level'] ?></td>
                        <td><?= number_format($data_kar['gaji']) ?></td>
                        <td>
                            <a href="index.php?p=edit-karyawan&id=<?= $data_kar['id_kar'] ?>" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
