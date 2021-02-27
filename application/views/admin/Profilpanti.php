        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="text-right mb-4">
            <a href="<?= base_url('Admin/Inputpanti') ?>" class="btn btn-success btn-lg">+ Input Panti</a>
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Panti</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Panti</th>
                      <th>Gambar</th>
                      <th>Alamat</th>
                      <th>Deskripsi</th>
                      <th>Telepon</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach ($listpanti as $panti) : ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $panti['nama']; ?></td>
                        <td><img src="<?= base_url('assets/img/' . $panti['gambar']); ?>" width="50px" height="50px"></td>
                        <td><?= $panti['alamat']; ?></td>
                        <td> <?php echo implode(' ', array_slice(explode(' ', $panti['deskripsi']), 0, 20)); ?>...</td>
                        <td><?= $panti['telepon']; ?></td>
                        <td><a href="<?= base_url('Admin/read_panti/') ?><?= $panti['id_profil']; ?>" class="btn btn-warning btn-sm">Edit</a> <a href="<?= base_url('Admin/delete_panti/') ?><?= $panti['id_profil']; ?>" class="btn btn-danger btn-sm">Hapus</a></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


        </div>
        <!-- /.container-fluid -->