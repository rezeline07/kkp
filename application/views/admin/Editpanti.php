        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->


          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Edit Data</h6>
            </div>
            <div class="card-body">
              <?php echo form_open_multipart('Admin/update_panti/' . $panti[0]['id_profil']) ?>
              <div class="form-group">
                <label for="nama_panti">Nama Panti</label>
                <input type="text" class="form-control" name="nama_panti" id="nama_panti" value="<?= $panti[0]['nama']; ?>">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat" cols="10" rows="5"><?= $panti[0]['alamat']; ?></textarea>
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="ckeditor" name="deskripsi" id="deskripsi" class="ckeditor form-control" cols="10" rows="3"><?= $panti[0]['deskripsi']; ?></textarea>
              </div>
              <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="number" class="form-control" name="telepon" id="telepon" value="<?= $panti[0]['telepon']; ?>">
              </div>
              <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="hidden" name="oldimage" value="<?= $panti[0]['gambar'] ?>">
                <img src="<?= base_url('assets/img/' . $panti[0]['gambar']); ?>" width="50px" height="50px">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="gambar" id="gambar">
                  <label class="custom-file-label" for="gambar">Choose file</label>
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-md btn-primary" type="submit" name="submit">Update</button>
              </div>
              </form>
            </div>

          </div>
        </div>



        <!-- /.container-fluid -->