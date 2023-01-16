<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Departement</h6>
    </div>
    <div class="card-header">
        <a href="index.php?p=tambah-user" class="btn btn-success">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>
                            
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        $no=1;
                        $data = mysqli_query($koneksi,"SELECT * FROM user");
                        foreach ($data as $dep) {
                            
                     ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $dep['nama'] ?></td>  
                        <td><?= $dep['username'] ?></td>  
                        <td><?= $dep['password'] ?></td>  
                        <td>
                            <a href="index.php?p=edit-user&id=<?= $dep['id_user'] ?>" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
